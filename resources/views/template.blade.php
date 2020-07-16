<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>
    <!--icon red-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/lte/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">

    <!--SideBar-->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">
                        <a href="{{route('ini')}}">PROGRAMAS ACADEMICOS PERU</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('universidades')}}" class="nav-link">
                            <i class="fas fa-university"></i>
                            <p>Universidades</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('programas')}}" class="nav-link">
                            <i class="far fa-list-alt"></i>
                            <p>Programas Academicos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('departamentos')}}" class="nav-link">
                            <i class="fas fa-globe-americas"></i>
                            <p>Departamentos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('estadisticas')}}" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            <p>Estadisticas</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <nav class="main-header navbar navbar-expand navbar-info navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item mt-2 d-none d-sm-inline-block">
                <a>@yield('titulo')</a>
            </li>
        </ul>
    </nav>

    @yield('contenido')

    <script src="{{asset('assets/lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
     <script src="{{asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/lte/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets\lte/dist/js/demo.js')}}"></script>
    <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>
</body>
</html>
