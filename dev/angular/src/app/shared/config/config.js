(function() {
    'use strict';

    var core = angular.module('shared.config');

    // Core Config Details

    var coreConfigDetails = {
        name: 'Built by Will',
        version: '1.0.0',
        debug: '@@debug'.indexOf('@@') !== -1
    };
    coreConfigDetails.appErrorPrefix = '[' + coreConfigDetails.name + ' Error] '; // Configure the exceptionHandler decorator
    core.value('config', coreConfigDetails);

    // Core Config

    coreConfig.$inject = ['$provide', '$logProvider', '$routeProvider', '$httpProvider', 'routeHelperConfigProvider', 'exceptionHandlerProvider'];
    core.config(coreConfig);

    function coreConfig($provide, $logProvider, $routeProvider, $httpProvider, routeHelperConfigProvider, exceptionHandlerProvider) {

		// TODO: move to provider?
        // turn $log off/on
        if (!coreConfigDetails.debug) {
            $logProvider.debugEnabled(false);
            $provide.decorator('$log', ['$delegate', function ($delegate) {
                var falseLog = function () { return false; };
                $delegate.info = falseLog;
                $delegate.warn = falseLog;
                $delegate.error = falseLog;
                return $delegate;
            }]);
        }

        // Configure the common route provider
        routeHelperConfigProvider.config.$routeProvider = $routeProvider;
        routeHelperConfigProvider.config.docTitle = coreConfigDetails.name + ' - ';
        var resolveAlways = {
            ready: function () {
                return true;
            }
        };
        routeHelperConfigProvider.config.resolveAlways = resolveAlways;

        // Configure the common exception handler
        exceptionHandlerProvider.configure(coreConfigDetails.appErrorPrefix);
    }

    // Toast Config

    toastrConfig.$inject = ['toastr'];
    core.config(toastrConfig);
	
	function toastrConfig(toastr) {
        toastr.options.timeOut = 4000;
        toastr.options.positionClass = 'toast-bottom-right';
	}

})();