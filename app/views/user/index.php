<!-- app/views/index.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- load bootstrap via cdn -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }
    </style>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <!-- load angular -->

    <script src="js/controllers/main-controller.js"></script>
    <!-- load our controller -->
    <script src="js/services/service-app.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->

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
        <form ng-submit="submitUser()">
            <!-- Nama -->
            <div class="form-group">
                <input type="text" class="form-control" name="nama" ng-model="userData.nama" placeholder="Nama">

                <p class="text-danger">{{ message.nama}}</p>
            </div>
            <!-- Email -->
            <div class="form-group">
                <input type="text" class="form-control" name="email" ng-model="userData.email"
                       placeholder="Email">

                <p class="text-danger">{{ message.email}}</p>
            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" class="form-control" name="password" ng-model="userData.password"
                       placeholder="Password">

                <p class="text-danger">{{ message.password}}</p>
            </div>
            <!-- SUBMIT BUTTON -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</div>
</body>
</html>
