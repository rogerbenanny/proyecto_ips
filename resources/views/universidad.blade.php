@extends("theme.$theme.layout1")

@section('titulo')
Universidad
@endsection

@section('contenido')
<div class="content-wrapper">
  <div class="main-header"> 
      <a href="{{route('ini')}}" class="h5 text-info">Inicio</a>
      <a class="h5 text-dark">></a>
      <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
      <a class="h5 text-dark">></a>
      <a  class="h5 text-dark" >{{$universidad->UniNom}} </a>
  </div>
  <div class="container mt-4 ">
    <div class="text-center ">
      <a  class="h4 text-dark ">{{$universidad->UniNom}}</a>
  </div>
  <div class="row mt-4">
    <div class="col-6 content-fluid">
    @php
    $filial=array();
    $local=array();
    $depart=array();
    $locpro=array();
    $direccion=array();
    $program=array();
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

  </div>
 
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
    <div class="row ml-auto mt-4 ">
    <div class="border border-dark rounded" id="barras" style="width: 550px; height: 400px"></div>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script> 
    <script>
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(dibujarGrafico);
    function dibujarGrafico() {
      // Tabla de datos: valores y etiquetas de la gráfica
      var data = google.visualization.arrayToDataTable([
          ['Element', 'Cantidad', { role: 'style' }],
          ['carrera profesional',{{count($carrera)}}, 'stroke-color: #900d0d; stroke-width: 4; fill-color: #cf1b1b'],
          ['maestria', {{count($maestria)}},'stroke-color: #cf7500; stroke-width: 4; fill-color: #f0a500' ],
          ['doctorado', {{count($doctorado)}}, 'stroke-color: #438a5e; stroke-width: 4; fill-color: #bac964'],
          ['Segunda Especialidad', {{count($segunda)}}, 'stroke-color: #0f4c75; stroke-width: 4; fill-color: #3282b8']
        ]);
      var options = {
        title: 'Total   de programas académicos'
      }
      // Dibujar el gráfico
      new google.visualization.ColumnChart( 
      //ColumnChart sería el tipo de gráfico a dibujar
        document.getElementById('barras')
      ).draw(data, options);
    }
    </script>   
    </div>
   
</div>
 
@endsection
