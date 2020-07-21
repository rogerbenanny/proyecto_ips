@extends("theme.$theme.layout1")

@section('titulo')
Locales
@endsection
@section('contenido')
<div class="content-wrapper">
<!--<div class="main-header ">
        <a href="\" class="h5 text-info ml-5">Inicio</a>
        <a>></a>
        <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
        <a>></a>
        <a href="javascript:history.back(-1);"class="h5 text-info ">Locales</a>
        <a>></a>
        <a  class="h5 text-dark" >{{$local->LocCod}}</a>
    </div>
    <div class="row ml-2 mt-4">

        <div class="main-header col-6 content-fluid ">

            <table id="example2"class="table table-striped border border-dark">
            <thead class="thead-dark">
            <tr>
                <th class="border border-dark"  scope="col">Lista de Programas del Local</th>

            </tr>
            </thead>
                @php
                    $locpro=array();
                    $program=array();
                @endphp
                @foreach ($localesprogramas as $lc)
                @if ($lc->LocCod==$local->LocCod)
                    @php
                        array_push($locpro,$lc)
                    @endphp

                @endif
                @endforeach
            <tbody>
                @foreach ($locpro as $l)
                    @foreach ($programas as $pro)
                        @if ($l->ProCod==$pro->ProCod)
                            <tr>
                                <td>{{$pro->ProNom}}</td>

                            </tr>
                        @endif
                    @endforeach
                @endforeach


            </tbody>
        </table>
    </div>
    <div class="row ml-5">
        <div >

            <iframe class="border border-dark"src= "https://maps.google.com/maps?q={{$local->LocLat}},{{$local->LocLon}}&hl=es;z=14&amp;output=embed" width="400" height="400" frameborder="0" ></iframe>
        </div>
    </div>
</div>-->

<!-- contenido 2-->
<div class="content-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <a></a>
            <br>
            <br>
            <a></a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header bg-info border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="h5 card-title">Lista</h3>
                </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered">
                    <thead >
                    <tr class="bg-dark">
                        <th class="border border-dark"  scope="col">Programas Academicos</th>

                    </tr>
                    </thead>
                        @php
                            $locpro=array();
                            $program=array();
                        @endphp
                        @foreach ($localesprogramas as $lc)
                        @if ($lc->LocCod==$local->LocCod)
                            @php
                                array_push($locpro,$lc)
                            @endphp

                        @endif
                        @endforeach
                    <tbody>
                        @foreach ($locpro as $l)
                            @foreach ($programas as $pro)
                                @if ($l->ProCod==$pro->ProCod)
                                    <tr>
                                        <td>{{$pro->ProNom}}</td>

                                    </tr>
                                @endif
                            @endforeach
                        @endforeach


                    </tbody>

            </table>








              </div>
            </div>
            <!-- /.card -->



            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info">
                <div class="d-flex justify-content-between">
                  <h3 class="h5 card-title">Ubicacion GPS</h3>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <iframe class="border border-dark"src= "https://maps.google.com/maps?q={{$local->LocLat}},{{$local->LocLon}}&hl=es;z=14&amp;output=embed" width="600" height="400" frameborder="0" allowfullscreen ></iframe>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- fin contenido 2 -->

@endsection
