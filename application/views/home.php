<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SamuelFaj - Exemplo de Crud - CI + AngularJS</title>

    <link rel="stylesheet" href="template/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="template/vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link rel="shortcut icon" href="template/images/favicon.png" />
</head>


<body ng-app="myApp">
    <div class="container-scroller">

        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <img src="https://avatars0.githubusercontent.com/u/12994414?s=460&v=4" class="rounded mr-2" width="40px"><b>Teste do Samuca</b>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#!/">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Usuários</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!/clientes">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Clientes</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <ng-view></ng-view>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.6.10/angular-route.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>