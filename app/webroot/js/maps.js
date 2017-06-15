tosMap.controller('MapsController', [
	"$scope", "Location",
	function ($scope, Location) {
		Location.query().$promise.then(function (response) {
			$scope.locations = response;
		});

		$scope.query = {q: '', previous: ''};
		$scope.query.navigated = false;
		$scope.suggestions = [];

		// Search for location by name
		$scope.search = function (q, $event) {
			var suggestions = [];

			if ($event.originalEvent.keyCode === 13 && $scope.suggestions.length > 0) {
				$($event.target).blur();
				$scope.navigate($scope.suggestions[0]);
			}
			else if (q !== $scope.query.previous) {
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
				}
				$scope.suggestions = suggestions;
			}
		};

		// Navigate (scroll the window) to the location
		$scope.navigate = function (location) {
			window.scrollTo(
				location.x - Math.floor(window.innerWidth / 2),
				location.y - Math.floor(window.innerHeight / 2)
			);

			$scope.query.navigated = true;
		};

		// Create the drag and move behavior
		$(document).ready(function(){
			var wndow, scrolling = false;

			$('.draggable').on('mousedown', function(event) {
				$('body').addClass('dragging');
				wndow = {x:event.pageX, y: event.pageY};
				scrolling = true;
			});

			$('.draggable').on('mousemove', function(event) {
				if (scrolling) {
					window.scrollBy(wndow.x - event.pageX, wndow.y - event.pageY);
					wndow = {x:event.pageX, y: event.pageY};
				}
			});

			$('.draggable').on('mouseup', function () {
				$('body').removeClass('dragging');
				scrolling = false;
				wndow = {};
			});
		});
	}
]);
