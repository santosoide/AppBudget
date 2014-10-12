/**
 * Created by Edi Santoso on 11/10/2014.
 */

var myApp = angular.module('myApp', ['ui.router', 'UserListCtrl', 'UserAddCtrl', 'UserEditCtrl']);

myApp.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {
    //For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/");

    //Configure app routing
    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "partials/user/list.html",
            controller: 'UserListCtrl'

        })
        .state('tambah', {
            url: "/tambah",
            templateUrl: "partials/user/tambah.html",
            controller: 'UserAddCtrl'
        })
        .state('edit', {
            url: "/edit",
            templateUrl: "partials/user/edit.html",
            controller: 'UserEditCtrl'
        });

    // use the HTML5 History API
    $locationProvider.html5Mode(true);
});


