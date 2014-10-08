angular.module('userService', [])

    .factory('User', function ($http) {

        return {
            // get data dengan pagination dan pencarian data
            get: function (page, term) {
                return $http.get('/user?page=' + page + '&term=' + term);
                //return $http.get('/user');
            },

            // save a comment (pass in comment data)
            save: function (userData) {
                return $http({
                    method: 'POST',
                    url: '/user',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(userData)
                });
            },

            // destroy a comment
            destroy: function (id) {
                return $http.delete('/user/' + id);
            }
        }

    });
