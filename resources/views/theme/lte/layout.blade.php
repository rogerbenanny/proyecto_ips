<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Programas Academicos Peru</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>
    <!--icon red-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!--Inicio header-->
            @include('theme/lte/header')
            <!--Fin header-->
            <!--Inicio aside-->
            @include('theme/lte/aside')
            <!--Fin aside-->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1 class="m-0 text-dark" >Programas Academicos Peru</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>

                <section class="content">
                    <div class="container-fluid">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-lg-3 col-6">

                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">


                              <p style="font-size: 35px">Universidades</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-university"></i>>
                            </div>
                            <a href="#" class="small-box-footer">Aceeder <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->

                          <div class="small-box bg-success">
                            <div class="inner">


                              <p style="font-size: 35px">Pro. Academicos</p>
                            </div>
                            <div class="icon">
                               <i class="far fa-list-alt"></i>>
                            </div>
                            <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">


                              <p style="font-size: 35px">Departamentos</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-globe-americas"></i>>
                            </div>
                            <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">


                              <p style="font-size: 35px">Estadisticas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-bar"></i>>
                            </div>
                            <a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                    </div>
                </section>

            </div>
            <!--Inicio footer-->
            @include('theme/lte/footer')
            <!--Fin footer-->
        </div>
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
        <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>

    </body>
</html>
