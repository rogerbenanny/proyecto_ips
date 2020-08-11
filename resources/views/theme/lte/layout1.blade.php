<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo','Programas Academicos Peru')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--icon red-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- js -->

    <style type="text/css">
        body {
            color: #5d5d5d;
            font-family: Helvetica, Arial, sans-serif;
        }

        h1 {
            font-size: 30px;
            margin: auto;
            margin-top: 50px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }
		.mapael .map {
            position: relative;
        }

        .mapael .mapTooltip {
            position: absolute;
            background-color: #fff;
            moz-opacity: 0.70;
            opacity: 0.70;
            filter: alpha(opacity=70);
            border-radius: 10px;
            padding: 10px;
            z-index: 1000;
            max-width: 200px;
            display: none;
            color: #343434;
        }
    </style>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/jsgrid/jsgrid.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/jsgrid/jsgrid-theme.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/lte/plugins/jquery-ui/jquery-ui.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!--Inicio header-->
            @include("theme.$theme.header1")
            <!--Fin header-->
            <!--Inicio aside-->
            @include("theme.$theme.aside")
            <!--Fin aside-->

                @yield('contenido')

            <!--Inicio footer-->
            <!--@include('theme/lte/footer')-->
            <!--Fin footer-->
        </div>
        <!-- js -->
        <script type="text/javascript" src="{{asset("assets/lte/plugins/jquery/jquery.min.js")}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
        charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

        <script src="{{asset("assets/lte/plugins/jquery-mapael/jquery.mapael.min.js")}}" charset="utf-8"></script>
        <script src="{{asset("assets/lte/plugins/jquery-mapael/maps/peru.min.js")}}" charset="utf-8"></script>


        <script type="text/javascript" src="{{asset("assets/lte/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- jsGrid -->
        <script src="{{asset("assets/$theme/plugins/jsgrid/demos/db.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/jsgrid/jsgrid.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('assets/lte/plugins/chart.js/Chart.min.js')}}"></script>

        <script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>


        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true,
                "autoWidth": true,
              });
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
              });
            });
          </script>
          <script>
          @yield('script')
          </script>
          @yield('ss')
    </body>
</html>
