<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>
    <!--icon red-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets\lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets\lte/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!--Fin header-->
    @include('theme/lte/aside')

    <!--Inicio aside-->
    <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item mt-2 d-none d-sm-inline-block">
         <a>UNIVERSIDADES</a>
        </li>
    </ul>

    </nav>
    <div class="main-header mt-3  ">
          <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
          <a>></a>
          <a href="\" class="h5 text-dark" style="background-color:white"> Universidades</a>
    </div>
    <div class=" container-fluid main-header text-center">

        <div class="row ">
          <div class="accordion  main-header mt-5" id="accordionExample">
           <div class="card">
             <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <a class="font-weight-bold text-dark">Departamento</a>
                 </button>
              </h2>
              </div>
            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                  <a class="dropdown-item" href="\">Arequipa(2)</a>
                  <a class="dropdown-item" href="#">Ayacucho(11)</a>
                  <a class="dropdown-item" href="#">Ica</a>
                  <a class="dropdown-item" href="#">Moquegua</a>
                  <a class="dropdown-item" href="#">Tacna</a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <a class="font-weight-bold text-dark">Nivel Académico</a>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <a class="font-weight-bold text-dark">Años de Licenciamiento</a>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
              Numero 3
              </div>
            </div>
          </div>
        </div>
          <div class="col-6 ">
           <div class="mt-5">
                <h1 >Universidades del Perú</h1>
            </div><!-- /.col -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
               </div>
                  <div class="col-3 text-left">
                  <a>Buscar</a>
                  <div>

                  <input class="form-control form-control-navbar " type="search" placeholder="Search" aria-label="Search" >

                  </div>
                 </div>
                  <div class="col-3 ml-3 ">
                  <a >Gestion</a>
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle border border-brown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      privado
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="#">privado</a>
                      <a class="dropdown-item" href="#">publico</a>
                    </div>
                  </div>
                  </div>
                  <div class="col-2 ml-3">
                  <a >Orden</a>

                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle  border border-brown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ascendente
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="#">Ascendente</a>
                      <a class="dropdown-item" href="#">Descendente</a>
                    </div>
                  </div>
                  </div>
                  <div class="col-2 mt-2  ml-5">

                  <button type="button" class="btn btn-secondary btn-sm">Aplicar</button>
                      </div>
               </div>
               <textarea  readonly="readonly" name="" id="" type=""cols="120  " rows="14"> </textarea>
            </div>
        </div><!-- /.row -->
     </div>
    <script src="{{asset('assets\lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
     <script src="{{asset('assets\lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets\lte/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets\lte/dist/js/demo.js')}}"></script>
     <script src="https://kit.fontawesome.com/2d377ef0a3.js" crossorigin="anonymous"></script>
</body>
</html>
