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

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="col-md-2">Nama</th>
            <th class="col-md-4">Email</th>
        </tr>
        </thead>
        <tbody ng-repeat="user in users">
        <tr>
            <td>{{ user.nama }}</td>
            <td>{{ user.email }}</td>
        </tr>
        </tbody>
    </table>

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
            <input type="text" ng-model="main.term" ng-enter="cariData()" value="santoso" class="form-control" id="cari" placeholder="Cari">
        </div>
    </div>

</div>
</body>
</html>
