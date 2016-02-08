(function() {
    'use strict';

    angular.module('app.home')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['$scope', '$location', 'Project'];

    function HomeController($scope, $location, Project) {

        /*jshint validthis: true */
        var ctrl = this;

        ctrl.projects = [];

        ctrl.openProject = openProject;

        activate();

        //////////////////////////////////////

        function activate() {
            ctrl.projects = Project.query();
        }

        function openProject(project) {
            $location.path('/projects/' + project.title.toLowerCase());
        }
    }

})();
