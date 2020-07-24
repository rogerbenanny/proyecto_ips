@extends("theme.$theme.layout1")

@section('titulo')
Universidad
@endsection


@section('contenido')

<div class="content-wrapper">
<!--<div class="main-header">
      <a href="{{route('ini')}}" class="h5 text-info">Inicio</a>
      <a class="h5 text-dark">></a>
      <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
      <a class="h5 text-dark">></a>
      <a  class="h5 text-dark" >{{$universidad->UniNom}} </a>
  </div>-->
  <div class="container-fluid ">
    <div class="text-center ">
      <!--<a  class="h4 text-dark ">{{$universidad->UniNom}}</a>-->
  </div>
  </div>


   <!--<div class="col-6 content-fluid">
    @php
    $filial=array();
    $local=array();
    $depart=array();
    $locpro=array();
    $direccion=array();
    $program=array();
    $profe=array();
    $segundaa=array();
    $maestriaa=array();
    $docto=array();
    $pre=0;
    $post=0;
    $cf=1;
    $f=1;
    @endphp
    @foreach ($filiales as $fil)
      @if($fil->UniCod==$universidad->UniCod)
      @php
          array_push($filial,$fil)
        @endphp
      @endif
    @endforeach
    @foreach ($filial as $f)
        @foreach ($direcciones as $dir)
            @if ($f->DirCod==$dir->DirCod)
              @php
              array_push($direccion,$dir)
              @endphp
            @endif
        @endforeach
    @endforeach
    @foreach($filial as $f)
      @foreach ($locales as $loc)
        @if($f->FilCod==$loc->FilCod)
            @php
              array_push($local,$loc)
            @endphp

          @endif
      @endforeach
    @endforeach
    @foreach($direccion as $d)
    @foreach ($departamentos as $dep)
        @if($d->DepCod==$dep->DepCod)
            @if (!in_array($dep, $depart))
              @php
            array_push($depart,$dep)
            @endphp
          @endif
        @endif
      @endforeach
  @endforeach
    @foreach($filial as $f)
        @foreach($local as $l)
          @if($f->FilCod==$l->FilCod)
            @foreach($localesprogramas as $lp)
              @if($l->LocCod==$lp->LocCod)
                @php
                  array_push($locpro,$lp)
                @endphp
              @endif
            @endforeach
          @endif
          @endforeach
    @endforeach
    @foreach($locpro as $lp)
      @foreach($programas as $pro)
        @if($pro->ProCod==$lp->ProCod)
          @php
              array_push($program,$pro)
          @endphp
        @endif
      @endforeach
    @endforeach

      @foreach ($program as $pro)
      @if ($pro->ProTipNivAca==1)
      @php
          $post+=1;

      @endphp

      @else
      @php
      $pre+=1;

      @endphp

      @endif
      @endforeach
  <table class="table table-striped mt-4 border border-dark">
      <thead class="thead-dark">
        <tr  class="text-center">
          <th colspan="2"  class="border border-dark"  scope="col">Descripcion</th>

        </tr>
      </thead>
    <tbody>
      <tr>
        <td><a class="h6 text-dark " >Licenciada</a></td>
        <td><a class="h6 text-dark " >Programas Academicos: {{count($program)}}</a></td>
      </tr>
      <tr>
      <td><a class="h6 text-dark " >Años de Licenciamiento: {{$universidad->UniPerLic}}</a></td>
      <td><a class="h6 text-dark">PostGrado: {{$post}}</a></td>
      </tr>

      <tr><td></td><td><a class="h6 text-dark text-right">Pregrado: {{$pre}}</a> </td></tr>


    </tbody>

  @foreach($filial as $f)
  @php
      $cf=1;
    @endphp
  </table>

    <table class="table table-striped  mt-3 border border-dark">
        <thead class="thead-dark">
            <tr  class="text-center">
              <th colspan="2"  class="border border-dark"  scope="col">Filial: {{$f->FilNom}}</th>

            </tr>

        </thead>

    <tbody>
      <tr>
          @foreach($direccion as $d)
              @if($f->DirCod==$d->DirCod)
                @foreach($depart as $dp)
                  @if($d->DepCod==$dp->DepCod)

                  <td >
                    <a  class="h6 text-dark " >Gestion: {{$universidad->UniTipGes == 0 ? 'Publico' : 'Privado'}}</a>
                    <br>
                    <a  class="h6 text-dark" >Departamento: {{$dp->DepNom}}</a>
                    <br>
                    <a  class="h6 text-dark" >Provincia: {{$d->DirProNom}}</a>
                    <br>
                  </td>

                  @endif

                @endforeach
              @endif

            @endforeach

            <td class="justify-content-right">
            @foreach ($local as $l)
              @if ($f->FilCod==$l->FilCod)


                <a href="{{route('universidades/locales',$l->LocCod )}}" class="h6 text-dark ">Local {{$cf}}:</a>
                <br>
                <a  class="h6 text-dark" >Distrito: {{$l->LocDis}}</a>
                <br>


            @php
              $cf+=1;
            @endphp
            @endif
            @endforeach
          </td>
          </tr>
      </tbody>
    @endforeach
  </table>

  </div>-->


      @php
      $carrera=array();
      $maestria=array();
      $doctorado=array();
      $segunda=array();

      @endphp
      @foreach ($program as $p)
        @switch($p->ProNivAca)
            @case(0)
                @php
                  array_push($carrera,$p)
                @endphp
                @break
            @case(1)
                @php
                array_push($maestria,$p)
                @endphp
                @break
            @case(2)
                @php
                array_push($doctorado,$p)
                @endphp
                @break
            @case(3)
                @php
                array_push($segunda,$p)
                @endphp
                @break
            @default
        @endswitch
      @endforeach
      @foreach ($program as $p)
        @if ($p->ProNivAca == 0)
                @php
                array_push($profe,$p)
                @endphp
                    @elseif($p->ProNivAca == 1)
                    @php
                    array_push($maestriaa,$p)
                    @endphp
                        @elseif($p->ProNivAca == 2)
                        @php
                        array_push($docto,$p)
                        @endphp
                            @elseif($p->ProNivAca == 3)
                            @php
                            array_push($segundaa,$p)
                            @endphp
                @endif
        @endforeach

    <!-- contenido 2-->
<div class="content-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <a></a>
            <br>
            <h3 class="text-dark text-center">{{$universidad->UniNom}}</h3>
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
                  <h3 class="h5 card-title">Contenido</h3>
                </div>
              </div>
              <div class="card-body">



                    <a class="h6 text-dark text-left" >Universidad Licenciada</a><br>
                    <a class="h6 text-dark text-left" >Años de Licenciamiento: {{$universidad->UniPerLic}}</a><br>

                    <a class="h6 text-dark text-left" >Programas Academicos: {{count($program)}}</a><br>
                    <a class="h6 text-dark text-left">PostGrado: {{$post}}</a><br>


                    <a class="h6 text-dark text-left">Pregrado: {{$pre}}</a>





              </div>
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header bg-info border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="h5 card-title">Grafico Estadistico Programas Academicos   </h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                      <canvas id="myChart" style="min-height: 250px; height: 150px; max-height: 150   px; max-width: 100%;"></canvas>
                  </div>

                </div>
            </div>


            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info">
                <div class="d-flex justify-content-between">
                  <h3 class="h5 card-title">Filiales</h3>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">

                    @foreach($filial as $f)
                    @php
                        $cf=1;
                    @endphp


                        <thead class="thead-dark">
                            <tr  class="text-center">
                                <th colspan="2"  class="border border-dark"  scope="col">Filial: {{$f->FilNom}}</th>
                            </tr>

                        </thead>

                    <tbody>
                        <tr>
                            @foreach($direccion as $d)
                                @if($f->DirCod==$d->DirCod)
                                @foreach($depart as $dp)
                                    @if($d->DepCod==$dp->DepCod)

                                    <td >
                                    <a  class=" text-dark text-left" >Gestion: {{$universidad->UniTipGes == 0 ? 'Publico' : 'Privado'}}</a>
                                    <br>
                                    <a  class="text-dark text-left" >Departamento: {{$dp->DepNom}}</a>
                                    <br>
                                    <a  class=" text-dark text-left" >Provincia: {{$d->DirProNom}}</a>
                                    <br>
                                    </td>

                                    @endif

                                @endforeach
                                @endif

                            @endforeach

                            <td >
                            @foreach ($local as $l)
                                @if ($f->FilCod==$l->FilCod)


                                <a href="{{route('universidades/locales',$l->LocCod )}}" class="text-dark text-left" >Local {{$cf}}:</a>
                                <br>
                                <a  class=" text-dark text-left" >Distrito: {{$l->LocDis}}</a>
                                <br>


                            @php
                                $cf+=1;
                            @endphp
                            @endif
                            @endforeach
                            </td>
                            </tr>
                        </tbody>
                    @endforeach
                    </table>



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
<!--fin contenido 2-->
</div>
</div>


@endsection

@section('script')
<canvas id="myChart"></canvas>
    <script src="chart.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Carrera Profesional',
         'Maestria', 
         'Doctorado', 
         'Segunda Carrera'],
        datasets: [{
            label: 'Nivel Academico',
            backgroundColor: ['#cf1b1b', '#f0a500', '#bac964', '#3282b8', '#24CBE5'],
            borderColor: ['#900d0d', '#cf7500', '#438a5e', '#0f4c75', '#24CBE5'],
            borderWidth: "2",
            data: [{{ count($profe) }}, {{ count($maestriaa) }}, {{ count($docto) }}, {{ count($segundaa) }},0]
        }
		]},
    options: {responsive: true}
    });
    </script>
  @endsection

