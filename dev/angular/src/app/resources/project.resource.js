(function() {
	'use strict';

	angular.module('app.resources')
		.factory('Project', Project);

	Project.$inject = ['$resource'];

	function Project($resource) {
		return $resource('content/json/projects.json', {}, {
			get: {
				method: 'GET',
				transformResponse: function(data, headers) {
					return data; //angular.fromJson(data).value;
				}
			}
		});
	}

})();
