<div ng-controller="MapsController">
	<div class="locations">
		<div class="map"><?php echo $this->Html->image('map.jpg'); ?></div>

		<div class="location" ng-repeat="location in locations"></div>
	</div>
</div>
