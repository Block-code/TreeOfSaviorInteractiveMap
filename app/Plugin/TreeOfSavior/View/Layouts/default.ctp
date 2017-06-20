<!DOCTYPE html>
<html ng-app="tosMap">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<!-- angular and angular-resource -->
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/angular.min.js"></script>

	<link rel="stylesheet" href="/css/bootstrap.min.css"> <!-- bootstrap 3.3.7 -->
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<?php echo $this->fetch('content'); ?>

	<script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript" src="/js/dashboards.js"></script>
	<script type="text/javascript" src="/js/maps.js"></script>

	<script type="text/javascript">
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
	</script>
</body>
</html>
