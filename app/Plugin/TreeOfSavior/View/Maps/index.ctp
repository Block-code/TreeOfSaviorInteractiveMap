<div ng-controller="MapsController">
	<div class="locations">
		<div class="map"><img src="img/map.jpg"></div>

		<div class="location" ng-repeat="location in locations" ng-style="{top: location.Location.position.y, left: location.Location.position.x}">{{location.Location.name}}</div>
	</div>

	<div class="popin">
		<div class="searchbar">
			<input type="text" placeholder="Esta procurando por algum lugar" class="form-control" ng-change="search(query.q)" ng-model="query.q">
			<div class="glyphicon glyphicon-question-sign iconbar" ng-click="search(query.q)"></div>
		</div>
		<div class="suggestions" ng-if="suggestions.length > 0">
			<ul class="list-unstyled">
				<li ng-click="navigate(location);clear();" ng-repeat="location in suggestions">{{location.name}} <span class="type">{{location.type}}</span></li>
			</ul>
		</div>
		<div class="advanced-options"></div>
	</div>
</div>
