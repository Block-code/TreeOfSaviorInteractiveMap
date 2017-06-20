<!DOCTYPE html>
<html ng-app="tosMap">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<!-- angular and angular-resource -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrap 3.3.7 -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php echo $this->fetch('content'); ?>

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/dash.js"></script>
	<script type="text/javascript" src="js/maps.js"></script>

</body>
</html>
