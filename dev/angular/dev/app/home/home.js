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
			subtitle: 'Purdue University',
            text: 'Pattern is a simple way to measure your study habits, providing you analytics and insights to become a better learner.',
            url: 'http://www.itap.purdue.edu/studio/pattern/',
            areas: [{
                name: 'iOS',
                type: 'Lead Developer',
                text: 'Developed the iOS client for Pattern to be simple, clean and have life with transitions and animations.',
                label: 'primary',
                tech: ['Objective-C', 'CoreData', 'RestKit', 'POP']
            }, {
                name: 'Web',
                type: 'Team Developer',
                text: 'We developed the Web Client using Angular JS, run on the cloud using Windows Azure, and made the server side lightweight and fast.',
                label: 'success',
                tech: ['Angular JS', 'Grunt', 'Bootstrap', 'C#', 'Windows Azure', 'Entity Framework', 'OData']
            }]
        }, {
            title: 'Skyepack',
			subtitle: '',
            text: 'Skyepack is solution for textbook replacement, and so much more. It supports self assessments, graded quizzes, and discussion boards, videos, images, documents, audio, and even customized HTML. Skyepack delivers content to iOS, Android, and the Web.',
            url: 'https://skyepack.com',
            areas: [{
                name: 'iOS',
                type: 'Lead Developer',
                text: '',
                label: 'primary',
                tech: ['Objective-C', 'CoreData', 'RestKit']
            }, {
                name: 'Android',
                type: 'Lead Developer',
                text: '',
                label: 'warning',
                tech: ['Java', 'Gradle']
            }, {
                name: 'Web',
                type: 'Team Developer',
                text: '',
                label: 'success',
                tech: ['C#', '.NET MVC', 'Windows Azure']
            }]
        }, {
            title: 'Convoy',
			subtitle: 'Purdue University',
            text: 'Convoy delivers interactive presentations, supplemental materials, and lecture notes together in a single package.',
            url: '',
            areas: [{
                name: 'iOS',
                type: 'Lead Developer',
                text: '',
                label: 'primary',
                tech: ['Objective-C', 'CoreData', 'RestKit']
            }, {
                name: 'Web',
                type: 'Lead Developer',
                text: '',
                label: 'success',
                tech: ['C#', '.NET MVC']
            }]
        }, {
            title: 'Passport',
			subtitle: 'Purdue University',
            text: 'Passport is a learning and e-portfolio system that uses digital badges to demonstrate learners\' competencies and achievements.',
            url: '',
            areas: [{
                name: 'iOS',
                type: 'Lead Developer',
                text: '',
                label: 'primary',
                tech: ['Objective-C', 'CoreData', 'RestKit']
            }, {
                name: 'Web',
                type: 'Team Developer',
                text: '',
                label: 'success',
                tech: ['C#', '.NET MVC']
            }]
        }, {
            title: 'Hotseat',
			subtitle: 'Purdue University',
            text: '',
            url: '',
            areas: [{
                name: 'iOS',
                type: 'Lead Developer',
                text: '',
                label: 'primary',
                tech: ['Objective-C', 'RestKit', 'SignalR', 'Websockets']
            }, {
                name: 'Web',
                type: 'Team Developer',
                text: '',
                label: 'success',
                tech: ['C#', '.NET MVC', 'Windows Azure', 'SignalR', 'Websockets']
            }]
        }, {
            title: 'Booklet',
			subtitle: '',
            text: 'Booklet is a jQuery tool for displaying content on the web in a flipbook layout. View demos, installation instructions, and documentation.',
            url: '/code/booklet',
            areas: [{
                name: 'Web',
                type: 'Personal',
                text: '',
                label: 'success',
                tech: ['Javascript', 'jQuery']
            }]
        }];

        activate();

        //////////////////////////////////////

        function activate() {}
    }

})();
