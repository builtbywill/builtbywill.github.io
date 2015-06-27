(function() {
    'use strict';

    angular.module('app.home')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['$scope', 'Project'];

    function HomeController($scope, Project) {

        /*jshint validthis: true */
        var ctrl = this;

        ctrl.projects = Project.query();

        activate();

        //////////////////////////////////////

        function activate() {}
    }

})();
