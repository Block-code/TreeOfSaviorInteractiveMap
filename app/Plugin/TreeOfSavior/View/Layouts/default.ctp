<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<!-- angular and angular-resource -->
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrap 3.3.7 -->
</head>
<body>
	<?php echo $this->fetch('content'); ?>
</body>
</html>