<!-- app/views/index.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        form {
            padding-bottom: 20px;
        }
    </style>
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <!-- load angular -->
    <script src="js/angular.min.js"></script>
    <!-- load angular ui route-->
    <script src="js/angular-ui-router.min.js"></script>
    <!-- load our controller -->
    <script src="js/controllers/main-controller.js"></script>
    <!-- load our service -->
    <script src="js/services/service-app.js"></script>
    <!-- load our application -->
    <script src="js/app.js"></script>

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="userApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <div class="page-header">
        <h2>Laravel and Angular Application</h2>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="col-md-3">Nama</th>
                <th class="col-md-6">Email</th>
                <th class="col-md-3">Aksi</th>
            </tr>
            </thead>
            <tbody ng-repeat="user in users">
            <tr>
                <td>{{ user.nama }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-default" ng-click="editUser(user._id)">
                        <i class="glyphicon glyphicon-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-default" ng-click="deleteUser(user._id)">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-default" ng-click='refreshData()'>
                <i class="glyphicon glyphicon-refresh"></i>
            </button>
            <button type="button" class="btn btn-default" ng-click='previousPage()' ng-disabled='current_page <= 1'>
                <i class="glyphicon glyphicon-chevron-left"></i>
            </button>
            <button type="button" class="btn btn-default" ng-click='nextPage()' ng-disabled='main.page >= last_page'>
                <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
        </div>
        <div class="col-md-3">
            <label class="text-muted">{{ from }} - {{ to }} dari {{ total }}</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" ng-model="main.term" ng-enter="cariData()" class="form-control" id="cari"
                       placeholder="Cari">
            </div>
        </div>
    </div>
    <div class="row">
        <form name="userForm" ng-submit="submitUser(userForm.$valid)" novalidate>
            <!-- Nama -->
            <div class="form-group">
                <input type="text" class="form-control" name="nama" ng-model="userData.nama" placeholder="Nama"
                       ng-minLength="3" ng-maxLength="50" required focus-me="getFocus">
                <!-- validasi dari angularjs-->
                <div class="help-block"
                     ng-show="userForm.nama.$invalid && !userForm.nama.$pristine && userForm.$submitted.$pristine">
                    <small class="text-danger" ng-show="userForm.nama.$error.required">Nama harus
                        diisi.
                    </small>
                    <small class="text-danger" ng-show="userForm.nama.$error.minlength">Nama
                        minimal 3 karakter.
                    </small>
                    <small class="text-danger" ng-show="userForm.nama.$error.maxlength">Nama
                        maksimal 50 karakter.
                    </small>
                </div>
                <!-- validasi dari laravel-->
                <small class="text-danger">{{ message.nama}}</small>
            </div>
            <!-- Email -->
            <div class="form-group">
                <input type="email" class="form-control" name="email" ng-model="userData.email"
                       placeholder="Email" required>

                <!-- validasi dari angularjs-->
                <div class="help-block"
                     ng-show="userForm.email.$invalid && !userForm.email.$pristine && userForm.$submitted.$pristine">
                    <small class="text-danger" ng-show="userForm.email.$error.required">Email harus
                        diisi.
                    </small>
                    <small class="text-danger" ng-show="userForm.email.$error.email">Email harus valid.</small>
                </div>
                <!-- validasi dari laravel-->
                <small class="text-danger">{{ message.email}}</small>

            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" class="form-control" name="password" ng-model="userData.password"
                       placeholder="Password" required>

                <!-- validasi dari angularjs-->
                <div class="help-block"
                     ng-show="userForm.password.$invalid && !userForm.password.$pristine && userForm.$submitted.$pristine">
                    <small class="text-danger" ng-show="userForm.password.$error.required">Password harus
                        diisi.
                    </small>
                </div>
                <!-- validasi dari laravel-->
                <small class="text-danger">{{ message.password}}</small>

            </div>
            <!-- SUBMIT BUTTON -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary" ng-disabled="userForm.$invalid">Submit</button>
            </div>
        </form>
    </div>

</div>
</body>
</html>
