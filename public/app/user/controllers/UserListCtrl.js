/**
 * Created by Edi Santoso on 12/10/2014.
 */

'use strict';

angular.module('UserListCtrl', [])

    .controller('UserListCtrl', function ($scope) {
        $scope.items = ["Edi", "Iwan", "Faris", "Irul"];
    });
