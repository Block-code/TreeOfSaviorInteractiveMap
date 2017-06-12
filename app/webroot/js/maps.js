tosMap.controller('MapsController', [
	"$scope", "Location",
	function ($scope, Location) {
		Location.query().$promise.then(function (response) {
			$scope.locations = response;
		});

		$scope.query = {q: '', previous: ''};

		// Search for location by name
		$scope.search = function (q) {
			var suggestions = [];

			if (q !== $scope.query.previous) {
				$scope.clear();
				if (q.length > 2) {
					angular.forEach($scope.locations, function(location) {
						if (location.Location.name.match(new RegExp(q, 'i'))) {
							suggestions.push({
								name:location.Location.name,
								type: location.Location.type,
								x: parseInt(location.Location.position.x, 10),
								y: parseInt(location.Location.position.y, 10)
							});

							$scope.previous = q;
						}
					});

					$scope.suggestions = suggestions;
				}
			}
		};

		// Clear suggestions
		$scope.clear = function () {
			$scope.suggestions = [];
		};

		// Navigate (scroll the window) to the location
		$scope.navigate = function (location) {
			window.scrollTo(
				location.x - Math.floor(window.innerWidth / 2),
				location.y- Math.floor(window.innerHeight / 2)
			);
		};

		// Create the drag and move behavior
		$(document).ready(function(){
			var wndow, scrolling = false;

			$(window).on('mousedown', function(event) {
				$('body').addClass('dragging');
				wndow = {x:event.pageX, y: event.pageY};
				scrolling = true;
			});

			$(window).on('mousemove', function(event) {
				if (scrolling) {
					window.scrollBy(wndow.x - event.pageX, wndow.y - event.pageY);
					wndow = {x:event.pageX, y: event.pageY};
				}
			});

			$(window).on('mouseup', function () {
				$('body').removeClass('dragging');
				scrolling = false;
				wndow = {};
			});
		});
	}
]);
