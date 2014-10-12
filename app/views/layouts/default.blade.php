<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    @yield('styles')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- js bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AngularJs -->
    <script src="js/angular.min.js"></script>
    <!-- load angular ui route-->
    <script src="js/angular-ui-router.min.js"></script>
    <!-- load angular app-->

@yield('scripts')
</body>
</html>