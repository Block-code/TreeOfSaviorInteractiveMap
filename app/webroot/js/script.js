"use strict";

var tosMap = angular.module('tosMap', ['ngResource'])
	.factory("Location", ["$resource", function ($resource) {
		return $resource("/locations/:action.json");
	}]);
