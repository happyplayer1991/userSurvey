 // Angular
 import './bootstrap';
 import 'angular';
 import 'angular-route'
 
 var app = angular.module('userSurvey', ['ngRoute']);
 app.config(['$httpProvider','$routeProvider', '$locationProvider', function ($httpProvider, $routeProvider, $locationProvider) {
        $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
        
        $routeProvider
            .when('/question/:id', {
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
  
 app.controller('MainController', ['$rootScope', '$scope', '$http', function ($rootScope, $scope, $http) {
        // Init question id
        $rootScope.question_id = 1;
    }])
    .controller('QuestionController', ['$rootScope', '$scope', '$http', '$routeParams', function ($rootScope, $scope, $http, $routeParams) {
               
        // Get question
        $http.post('/question', {
            id: $rootScope.question_id,
        }).then(function success(success) {
            console.log(success);
            $scope.exist = success.data.exist;
            if($scope.exist) {
                $scope.description = success.data.description;
                $scope.options = success.data.options;
            }
        }, function error(error, status) {
        });

        $scope.selectOption = function(option_id, link_question_id) {
            $scope.option_id= option_id;
            $rootScope.question_id = link_question_id;
        }
    }]);
 