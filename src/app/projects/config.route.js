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
			url: '/projects/:projectName',
			config: {
				templateUrl: 'app/projects/projects.html',
				controller: 'ProjectsController',
				controllerAs: 'ctrl',
				title: 'Projects'
			}
		}];
	}
})();
