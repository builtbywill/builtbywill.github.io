(function() {
    'use strict';

    angular
        .module('shared.layout')
        .controller('ShellController', ShellController);

    ShellController.$inject = ['$scope', '$location', 'routeHelper'];

    function ShellController($scope, $location, routeHelper) {

        /*jshint validthis: true */
        var ctrl = this;

        ctrl.navItems = [];
        ctrl.currentPath = currentPath;

        activate();

        //////////////////////////////////////

        function activate() {
            angular.forEach(routeHelper.getRoutes(), function(route) {
                ctrl.navItems.push({
                    url: route.originalPath,
                    title: route.title
                });
            });
        }

        ////
        
        function currentPath(){
            return $location.path();
        }

    }

})();
