(function() {
	'use strict';

	angular.module('app', [
		'shared.config',
        'app.resources',
		
		'app.home',
		'app.about',
		'app.projects'
	]);

})();

(function() {
	'use strict';

	angular.module('shared.constants', []);

})();

/* global toastr:false */
(function() {
	'use strict';

    angular
        .module('shared.constants')
        .constant('toastr', toastr);
})();

(function() {
	'use strict';

	angular.module('shared.logger', []);
	
})();

(function() {
	'use strict';

	angular
		.module('shared.logger')
		.factory('logger', logger);

	logger.$inject = ['$log', 'toastr'];

	function logger($log, toastr) {

		var service = {
			error: error,
			info: info,
			success: success,
			warning: warning,

			// console only, no toastr
			debug: debug
		};

		return service;

		/////////////////////

		function debug(message, data, title) {
			$log.debug('Debug: ' + message, data);
		}

		function error(message, data, title) {
			if (typeof $log.error() === 'undefined') {
				toastr.error(message, title);
			}
			$log.error('Error: ' + message, data);
		}

		function info(message, data, title) {
			if (typeof $log.info() === 'undefined') {
				toastr.info(message, title);
			}
			$log.info('Info: ' + message, data);
		}

		function success(message, data, title) {
			if (typeof $log.info() === 'undefined') {
				toastr.success(message, title);
			}
			$log.info('Success: ' + message, data);
		}

		function warning(message, data, title) {
			if (typeof $log.error() === 'undefined') {
				toastr.warning(message, title);
			}
			$log.warn('Warning: ' + message, data);
		}
	}
}());

(function() {
	'use strict';

	angular.module('shared.exception', [
		'shared.logger'
	]);

})();

// Include in index.html so that app level exceptions are handled.
// Exclude from testRunner.html which should run exactly what it wants to run
(function() {
	'use strict';

	angular
		.module('shared.exception')
		.provider('exceptionHandler', exceptionHandlerProvider)
		.config(config);

	config.$inject = ['$provide'];
	extendExceptionHandler.$inject = ['$delegate', 'exceptionHandler', 'logger'];

	/**
	 * Must configure the exception handling
	 * @return {[type]}
	 */
	function exceptionHandlerProvider() {
		/* jshint validthis:true */
		this.config = {
			appErrorPrefix: undefined
		};

		this.configure = function(appErrorPrefix) {
			this.config.appErrorPrefix = appErrorPrefix;
		};

		this.$get = function() {
			return {
				config: this.config
			};
		};
	}

	/**
	 * Configure by setting an optional string value for appErrorPrefix.
	 * Accessible via config.appErrorPrefix (via config value).
	 * @param  {[type]} $provide
	 * @return {[type]}
	 */
	function config($provide) {
		$provide.decorator('$exceptionHandler', extendExceptionHandler);
	}

	/**
	 * Extend the $exceptionHandler service to also display a toast.
	 * @param  {Object} $delegate
	 * @param  {Object} exceptionHandler
	 * @param  {Object} logger
	 * @return {Function} the decorated $exceptionHandler service
	 */
	function extendExceptionHandler($delegate, exceptionHandler, logger) {
		return function(exception, cause) {

			var appErrorPrefix = exceptionHandler.config.appErrorPrefix || '';
			var prefixedException = appErrorPrefix + exception;
			var data = {
				exception: exception,
				cause: cause
			};

			//$delegate(prefixedException, data); // calls $logger.error by default
			logger.error(prefixedException, data);
		};
	}
})();

(function() {
	'use strict';

	angular.module('shared.directives', []);

})();

(function() {
	'use strict';

	angular
		.module('shared.directives')
		.directive('ngReallyClick', ngReallyClick);

	ngReallyClick.$inject = ['$window'];

	function ngReallyClick($window) {
		/**
		 * A generic confirmation for risky actions.
		 * Usage: Add attributes: ng-really-message="Are you sure"? ng-really-click="takeAction()" function
		 */
		var directive = {
			link: link,
			restrict: 'A'
		};
		return directive;

		function link(scope, element, attrs) {
			element.bind('click', function() {
				var message = attrs.ngReallyMessage;
				if (message && $window.confirm(message)) {
					scope.$apply(attrs.ngReallyClick);
				}
			});
		}
	}
})();
(function() {
	'use strict';

	angular.module('shared.filters', []);

})();

(function() {
    'use strict';

    angular
        .module('shared.filters')
        .filter('mpReverse', mpReverse);

    function mpReverse() {
        return function(items) {
            return items.slice().reverse();
        };
    }

})();

(function() {
	'use strict';

	angular.module('shared.route', [
		'ngRoute',
		'shared.logger'
	]);

})();

(function() {
    'use strict';

    angular
        .module('shared.route')
        .provider('routeHelperConfig', routeHelperConfig)
        .factory('routeHelper', routeHelper);

    routeHelper.$inject = ['$location', '$rootScope', '$route', '$window', 'logger', 'routeHelperConfig'];

    // Must configure via the routeHelperConfigProvider

    function routeHelperConfig() {
        /* jshint validthis:true */
        this.config = {
            // These are the properties we need to set
            // $routeProvider: undefined
            // docTitle: ''
            // resolveAlways: {ready: function(){ } }
        };

        this.$get = function() {
            return {
                config: this.config
            };
        };
    }

    function routeHelper($location, $rootScope, $route, $window, logger, routeHelperConfig) {
        var handlingRouteChangeError = false;
        var routeCounts = {
            errors: 0,
            changes: 0
        };
        var routes = [];
        var $routeProvider = routeHelperConfig.config.$routeProvider;

        var service = {
            configureRoutes: configureRoutes,
            getRoutes: getRoutes,
            routeCounts: routeCounts
        };

        init();

        return service;

        ///////////////

        function init() {
            handleRoutingErrors();
            updateDocTitle();
            trackGoogleAnalyticsPageView();
        }

        function configureRoutes(routes) {
            routes.forEach(function(route) {
                route.config.resolve = angular.extend(route.config.resolve || {}, routeHelperConfig.config.resolveAlways);
                $routeProvider.when(route.url, route.config);

            });
            $routeProvider.otherwise({
                redirectTo: '/'
            });
        }

        function handleRoutingErrors() {
            // Route cancellation:
            // On routing error, go to the dashboard.
            // Provide an exit clause if it tries to do it twice.
            $rootScope.$on('$routeChangeError',
                function(event, current, previous, rejection) {
                    if (handlingRouteChangeError) {
                        return;
                    }
                    routeCounts.errors++;
                    handlingRouteChangeError = true;
                    var destination = (current && (current.title || current.name || current.loadedTemplateUrl)) ||
                        'unknown target';
                    var msg = 'Error routing to ' + destination + '. ' + (rejection.msg || '');
                    logger.warning(msg, [current]);

                    $location.path('/');
                }
            );
        }

        function getRoutes() {
            for (var prop in $route.routes) {
                if ($route.routes.hasOwnProperty(prop)) {
                    var route = $route.routes[prop];
                    var isRoute = !!route.title;
                    if (isRoute) {
                        routes.push(route);
                    }
                }
            }
            return routes;
        }

        function updateDocTitle() {
            $rootScope.$on('$routeChangeSuccess',
                function(event, current, previous) {
                    routeCounts.changes++;
                    handlingRouteChangeError = false;
                    $rootScope.title = routeHelperConfig.config.docTitle + ' ' + (current.title || ''); // data bind to <title>
                }
            );
        }

        function trackGoogleAnalyticsPageView() {
            if (typeof $window.ga === 'function') {
                $rootScope.$on('$routeChangeSuccess', function() {
                    $window.ga('send', 'pageview', {
                        page: $location.path()
                    });
                });
            }
        }

    }
})();

(function() {
    'use strict';

    angular.module('shared.config', [
        // Angular Modules 
        'ngAnimate',
        'ngCookies',
        'ngResource',
        'ngRoute',
        'ngSanitize',
        'ngTouch',

        // 3rd Party Modules 
        'mgcrea.ngStrap',
        'me-lazyload',

        // Shared Modules 
        'shared.constants',
        'shared.logger',
        'shared.exception',
        'shared.directives',
        'shared.filters',
        'shared.route'

    ]);

})();

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

    coreConfig.$inject = ['$provide', '$logProvider', '$locationProvider', '$routeProvider', '$httpProvider', 'routeHelperConfigProvider', 'exceptionHandlerProvider'];
    core.config(coreConfig);

    function coreConfig($provide, $logProvider, $locationProvider, $routeProvider, $httpProvider, routeHelperConfigProvider, exceptionHandlerProvider) {

        //$locationProvider.html5Mode(true).hashPrefix('!');

        // TODO: move to provider?
        // turn $log off/on
        if (!coreConfigDetails.debug) {
            $logProvider.debugEnabled(false);
            $provide.decorator('$log', ['$delegate', function($delegate) {
                var falseLog = function() {
                    return false;
                };
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
            ready: function() {
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

    // Core Run (setup items that are only available at runtime)

    core.run(coreRun);
    coreRun.$inject = ['$rootScope', '$window', '$timeout'];

    function coreRun($rootScope, $window, $timeout) {
        $rootScope.$on('$locationChangeSuccess', function(event) {
            // scroll to top after ng-leave animation (0.2s)
            $timeout(function() {
                $window.scrollTo(0, 0);

                // call scroll event after ng-enter animation (0.2s) to trigger lazy load images
                $timeout(function() {
                    $($window).scroll();
                }, 200);

            }, 200);
        });
    }

})();

(function() {
	'use strict';

	angular.module('app.resources', ['ngResource']);

})();

(function() {
	'use strict';

	angular.module('app.resources')
		.factory('Project', Project);

	Project.$inject = ['$resource'];

	function Project($resource) {
		return $resource('content/json/projects.8baf04ca.json', {}, {});
	}

})();

(function() {
	'use strict';

	angular.module('app.home', []);

})();

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
				templateUrl: 'app/home/home.a499140e.html',
				controller: 'HomeController',
				controllerAs: 'ctrl',
				title: 'Development + Design'
			}
		}];
	}
})();

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

(function() {
	'use strict';

	angular.module('app.about', []);

})();

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
                templateUrl: 'app/about/about.a891a51a.html',
                controller: 'AboutController',
                controllerAs: 'ctrl',
                title: 'About'
            }
        }];
    }
})();

(function() {
    'use strict';

    angular.module('app.about')
        .controller('AboutController', AboutController);

    AboutController.$inject = ['$scope'];

    function AboutController($scope) {
        
        /*jshint validthis: true */
        //var ctrl = this;

        activate();

        //////////////////////////////////////

        function activate() {
        }
    }

})();

(function() {
    'use strict';

    angular.module('app.projects', []);

})();

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
				templateUrl: 'app/projects/projects.862ad38a.html',
				controller: 'ProjectsController',
				controllerAs: 'ctrl',
				title: 'Projects'
			}
		}];
	}
})();

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
                document.title = 'Built by Will - ' + ctrl.project.title;
            });        
        }
    }

})();
