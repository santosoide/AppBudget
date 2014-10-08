/**
 * Created by Edi Santoso on 06/10/2014.
 */

angular.module('mainCtrl', [])

    // inject User service app ke Controller
    .controller('mainController', function ($scope, $http, User) {

        $scope.userData = {};

        // siapkan scope pagination data dan pencarian data
        $scope.main = {
            page: 1,
            term: ''
        };

        $scope.message = {
            nama: '',
            email: '',
            term: ''
        };

        // ambil data untuk pertama kali
        User.get($scope.main.page, $scope.main.term)
            .success(function (data) {
                // jika sukses set data yang akan diumpankan ke view
                // set data users
                $scope.users = data.data;

                // pagination data
                // halaman saat ini
                $scope.current_page = data.current_page;
                // halaman terakhir
                $scope.last_page = data.last_page;
                // data dari
                $scope.from = data.from;
                // data sampai
                $scope.to = data.to;
                // data total
                $scope.total = data.total;
            });

        // ambil data
        $scope.getData = function () {
            User.get($scope.main.page, $scope.main.term)
                .success(function (data) {
                    // jika sukses set data yang akan diumpankan ke view
                    // set data users
                    $scope.users = data.data;

                    // pagination data
                    // halaman saat ini
                    $scope.current_page = data.current_page;
                    // halaman terakhir
                    $scope.last_page = data.last_page;
                    // data dari
                    $scope.from = data.from;
                    // data sampai
                    $scope.to = data.to;
                    // data total
                    $scope.total = data.total;
                });
        };

        // navigasi halaman selanjutnya
        $scope.nextPage = function () {
            // jika page = 1 < halaman terakhir
            if ($scope.main.page < $scope.last_page) {
                // halaman saat ini ditambah increment++
                $scope.main.page++
            }
            // panggil ajax data
            $scope.getData();
        };

        // navigasi halaman sebelumnya
        $scope.previousPage = function () {
            // jika page = 1 > 1
            if ($scope.main.page > 1) {
                // page dikurangi decrement --
                $scope.main.page--
            }
            // panggil ajax data
            $scope.getData();
        };

        // refresh data
        $scope.refreshData = function () {
            // reset page  = 1
            $scope.main.page = 1;
            // reset term = ''
            $scope.main.term = '';
            //panggil ajax data
            $scope.getData();
        };

        // event enter untuk mencari data
        $scope.cariData = function () {
            $scope.main.page = 1;
            $scope.getData();
        };

        // function simpan user
        $scope.submitUser = function () {

            // umpan ke service save data
            User.store($scope.userData)
                .success(function (data) {
                    // return sukses save
                    $scope.message = {
                        nama: '',
                        email: '',
                        term: ''
                    };
                    $scope.getData();
                })
                .error(function (data) {
                    $scope.message.nama = data.nama;
                    $scope.message.email = data.email;
                    $scope.message.password = data.password;
                });
        };

        // edit data yang akan ditampilkan ke textbox
        $scope.editUser = function (_id) {
            User.show(_id)
                .success(function (data) {
                    // isi value text
                    $scope.userData.nama = data.nama;

                    // isi value text
                    $scope.userData.email = data.email;
                })
        };

        // menhapus user
        $scope.deleteUser = function (_id) {
            User.destroy(_id)
                .success(function () {
                    $scope.getData();
                })
        };

    })

    // bind event enter untuk pencarian data
    .directive('ngEnter', function () {
        return function (scope, element, attrs) {
            element.bind("keydown keypress", function (event) {
                if (event.which === 13) {
                    scope.$apply(function () {
                        scope.$eval(attrs.ngEnter);
                    });

                    scope.cariData();
                    event.preventDefault();
                }
            });
        };
    });
