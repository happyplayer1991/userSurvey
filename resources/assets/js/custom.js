 // Angular
 import './bootstrap';
 import 'angular';
 import 'angular-route'
 
 var app = angular.module('userSurvey', ['ngRoute']);
 app.config(['$httpProvider','$routeProvider', '$locationProvider', function ($httpProvider, $routeProvider, $locationProvider) {
        $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
        
        $routeProvider
            .when('/question', {
                templateUrl: '/views/question.html',
                controller: 'QuestionController'
            })
            .otherwise({
                templateUrl: '/views/main.html',
                controller: 'MainController'
            });

        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
 }]);
  
 app.controller('MainController', ['$scope', '$http', function ($scope, $http) {
    }])
    .controller('QuestionController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {
    }]);
 