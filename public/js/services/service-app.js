angular.module('userService', [])

    .factory('User', function ($http) {

        return {
            // get data dengan pagination dan pencarian data
            get: function (page, term) {
                return $http.get('/user?page=' + page + '&term=' + term);
            },

            //
            show: function (_id) {
                return $http.get('/user/' + _id);
            },

            // save a comment (pass in comment data)
            store: function (userData) {
                return $http({
                    method: 'POST',
                    url: '/user',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(userData)
                });
            },

            // destroy a comment
            destroy: function (_id) {
                return $http.delete('/user/' + _id);
            }
        }

    });
