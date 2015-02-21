(function() {
    'use strict';

    angular
        .module('app.about')
        .run(appRun);

    appRun.$inject = ['routeHelper'];

    function appRun(routeHelper) {
        routeHelper.configureRoutes(getRoutes());
    }

    function getRoutes() {
        return [{
            url: '/about',
            config: {
                templateUrl: 'app/about/about.html',
                controller: 'AboutController',
                controllerAs: 'ctrl',
                title: 'About'
            }
        }];
    }
})();
