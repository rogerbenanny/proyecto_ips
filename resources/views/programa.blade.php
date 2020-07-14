@extends('template')

@section('titulo')
Universidad
@endsection

@section('contenido')
<div class="main-header mt-3  ">
    <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
    <a>></a>
    <a href="{{route('universidades')}}" class="h5 text-info" style="background-color:white">Programa Academico</a>
    <a>></a>
    <a  class="h5 text-dark" >{{$programas->ProNom}}</a>
</div>
<div class="container mt-4 ">
  <div class="col-6 text-left ">
    <a  class="h4 text-dark " style="background-color:white">{{$programas->ProNom}}</a>
  </div>
  <div class="col-6 mt-4">
        @php
          $filial=array();
          $local=array();
          $direccion=array();
          $depart=array();
          $locpro=array();
        @endphp

         @foreach ($localesprogramas as $lp)
             @if($lp->ProCod==$programas->ProCod)
             @php
                array_push($locpro,$lp)
              @endphp

            @endif
          @endforeach
          @foreach($locpro as $lpro)
            @foreach ($locales as $loc)
                @if($lpro->LocCod==$loc->LocCod)
                 @php
                   array_push($local,$loc)
                 @endphp
                 @break;
                @endif
              @endforeach
           @endforeach
           @foreach($local as $l)
            @foreach ($filiales as $f)
                @if($l->FilCod==$f->FilCod)
                  @php
                    array_push($filial,f)
                  @endphp
                  @break;
                @endif
              @endforeach
           @endforeach
           @foreach($direccion as $d)
            @foreach ($departamentos as $dep)
                @if($d->DepCod==$dep->DepCod)
                   @php
                    array_push($depart,$dep)
                   @endphp
                  @break;
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
      @foreach($filial as $f)
        <table class="table table-striped pl-2 mt-3 ">
          <thead class="thead-dark">
              <tr>
                <th class="border border-dark"  scope="col">Filial: {{$f->FilNom}}</th>

              </tr>
          </thead>

       <tbody>
          @foreach($local as $l)
            @if($f->FilCod==$l->FilCod)
              @foreach($direccion as $d)
                @if($l->LocDirCod==$d->DirCod)
                  @foreach($depart as $dp)
                    @if($d->DepCod==$dp->DepCod)
                  <tr>
                    <td>
                      <a  class="h6 text-dark " >Gestion: {{$universidad->UniTipGes == 0 ? 'Publico' : 'Privado'}}</a>
                      <br>
                      <a  class="h6 text-dark" >Departamento: {{$dp->DepNom}}</a>
                      <br>
                      <a  class="h6 text-dark" >Provincia: {{$d->DirProNom}}</a>
                      <br>
                      <a  class="h6 text-dark" >Distrito: {{$l->LocDis}}</a>
                      </td>
                    </tr>
                    @endif
                  @endforeach
                @endif

              @endforeach
            @endif


            @endforeach

        </tbody>
        <table class="table table-striped pl-2 mt-4 ">

          <tbody>
            <tr>
                  <td><a class="h6 text-dark text-right">Pregrado</a></td>
                  <td><a class="h6 text-dark text-center" >Programas Academicos: {{count($locpro)}}</a></td>
                  <td><a class="h6 text-dark text-right">Postgrado</a> </td>
            </tr>

            </tbody>

        </table>
        <table class="table table-striped pl-2 mt-4 ">
          <thead class="thead-dark">
              <tr>
                <th class="border border-dark"  scope="col">Programas Academicos</th>
              </tr>
          </thead>
          <tbody>

            <tr>
                 @foreach ($program as $p)
                   <tr>
                        <td>{{$p->ProNom}}</td>
                   </tr>
               @endforeach
           </tr>

          </tbody>

        </table>
      @endforeach


</div>

@endsection
