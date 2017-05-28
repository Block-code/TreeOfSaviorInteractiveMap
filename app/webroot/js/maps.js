tosMap.controller('MapsController', [
	"$scope", "Location",
	function ($scope, Location) {
		Location.query().$promise.then(function (response) {
			$scope.locations = response;
		});

		// Create the drag and move behavior
		$(document).ready(function(){
			var wndow, scrolling = false;

			$('body').css('cursor', 'url(\'' + normalCursorImagePath + '\'), auto'); // @todo move this to css
			$(window).on('mousedown', function(event) {
				$('body').css('cursor', 'url(\'' + draggingCursorImagePath + '\'), auto');
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
				$('body').css('cursor', 'url(\'' + normalCursorImagePath + '\'), auto');
				scrolling = false;
				wndow = {};
			});
		});
	}
]);
