(function() {
	'use strict';

	angular
		.module('app.home')
		.run(appRun);

	appRun.$inject = ['routeHelper'];

	function appRun(routeHelper) {
        routeHelper.configureRoutes(getRoutes());
	}

	function getRoutes() {
		return [{
			url: '/',
			config: {
				templateUrl: 'app/home/home.html',
				controller: 'HomeController',
				controllerAs: 'ctrl',
				title: 'Development + Design'
			}
		}];
	}
})();
