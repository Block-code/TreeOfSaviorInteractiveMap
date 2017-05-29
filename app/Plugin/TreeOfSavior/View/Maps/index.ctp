<div ng-controller="MapsController">
	<div class="locations">
		<div class="map"><?php echo $this->Html->image('map.jpg'); ?></div>

		<div class="location" ng-repeat="location in locations" ng-style="{top: location.Location.position.y, left: location.Location.position.x}">{{location.Location.name}}</div>

		<div class="search">
			<input class="form-control" type="text" name="query" ng-model="query" ng-change="similars = search(query)">
			<ul class="list-unstyle">
				<li class="sugestion" ng-repeat="similar in similars" ng-click="navigate(similar)">{{similar.name}}</li>
			</ul>
		</div>
	</div>
</div>
