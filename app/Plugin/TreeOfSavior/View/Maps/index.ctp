<div ng-controller="MapsController">
	<div class="locations">
		<div class="map"><?php echo $this->Html->image('map.jpg'); ?></div>

		<div class="location" ng-repeat="location in locations" ng-style="{top: location.Location.position.y, left: location.Location.position.x}">{{location.Location.name}}</div>
	</div>
</div>
<script type="text/javascript">
	<?php $home = Router::url(null, true); ?>
	var normalCursorImagePath = '<?php echo $home; ?>img/normal.png',
		draggingCursorImagePath = '<?php echo $home; ?>img/dragging.png';
</script>
