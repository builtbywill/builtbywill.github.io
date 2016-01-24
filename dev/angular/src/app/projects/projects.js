(function() {
    'use strict';

    angular.module('app.projects')
        .controller('ProjectsController', ProjectsController);

    ProjectsController.$inject = ['$scope', '$routeParams', 'Project'];

    function ProjectsController($scope, $routeParams, Project) {

        /*jshint validthis: true */
        var ctrl = this;
        ctrl.project = null;

        activate();

        //////////////////////////////////////

        function activate() {

            var projectName = $routeParams.projectName;
            Project.query(function(projects){
                ctrl.project = projects.filter(function(project){
                    return project.title.toLowerCase() === projectName;
                })[0];
            });
        
        }
    }

})();
