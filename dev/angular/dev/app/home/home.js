(function() {
    'use strict';

    angular.module('app.home')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['$scope'];

    function HomeController($scope) {

        /*jshint validthis: true */
        //var ctrl = this;

        activate();

        //////////////////////////////////////

        function activate() {}
    }

})();
