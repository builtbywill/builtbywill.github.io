(function() {
    'use strict';

    angular.module('app.home')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['$scope'];

    function HomeController($scope) {

        /*jshint validthis: true */
        var ctrl = this;

        ctrl.projects = [{
            title: 'Pattern',
            text: 'Pattern is a simple way to measure your study habits, providing you analytics and insights to become a better learner.',
            url: 'http://www.itap.purdue.edu/studio/pattern/',
            areas: [{
                name: 'iOS',
                text: 'Solo. Developed the iOS client for Pattern to be simple, clean and have life with transitions and animations.',
                label: 'primary',
                tech: ['Objective-C', 'CoreData', 'RestKit', 'POP', 'Cocoapods']
            }, {
                name: 'Web',
                text: 'Team. We developed the Web Client using Angular JS. Learning a new technology is always fun.',
                label: 'success',
                tech: ['Angular JS', 'Grunt', 'Bootstrap']
            }, {
                name: 'Server',
                text: 'Team. Developed to run on the cloud using Windows Azure, we made the server side lightweight and fast.',
                label: 'info',
                tech: ['C#', 'Windows Azure', 'Entity Framework', 'OData']
            }]
        }];

        activate();

        //////////////////////////////////////

        function activate() {}
    }

})();
