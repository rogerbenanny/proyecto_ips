@extends('template')

@section('titulo')
Programas Academicos
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



</div>

@endsection
