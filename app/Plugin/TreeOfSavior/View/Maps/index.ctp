<div ng-controller="MapsController">
	<div class="locations">
		<div class="map"><?php echo $this->Html->image('map.jpg'); ?></div>

		<div class="location" ng-repeat="location in locations"></div>
	</div>
</div>
<script type="text/javascript">
	<?php $home = Router::url(null, true); ?>
	var normalCursorImagePath = '<?php echo $home; ?>img/normal.png',
		draggingCursorImagePath = '<?php echo $home; ?>img/dragging.png';
</script>
