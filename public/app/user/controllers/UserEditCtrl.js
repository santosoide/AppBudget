/**
 * Created by Edi Santoso on 12/10/2014.
 */

'use strict';

angular.module('UserEditCtrl', [])

    .controller('UserEditCtrl', function ($scope) {
        $scope.item = {
            nama: 'Edi Santoso',
            email: 'edicyber@gmail.com',
            password: 'qwerty'
        };

    });
