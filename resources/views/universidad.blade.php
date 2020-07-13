@extends('template')

@section('titulo')
Universidad
@endsection

@section('contenido')
<div class="main-header mt-3  ">
    <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
    <a>></a>
    <a href="{{route('universidades')}}" class="h5 text-info" style="background-color:white">Universidades</a>
    <a>></a>
    <a  class="h5 text-dark" >{{$universidad->UniNom}}</a>
</div>
<div class="container">

    <table class="table">
    
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Gestión</th>
            <th scope="col">Licenciamiento</th>
            <th scope="col">Periodo</th>
          </tr>
        </thead>
        <tbody>
             @if (!$filiales->isEmpty())
                @foreach ($filiales as $fil)
                  @foreach ($locales as $loc)  
                    @if($fil->UniCod==$universidad->UniCod && $loc->FilCod==$fil->FilCod)
                      <tr>
                         <th scope="row">{{$loc->LocDis}}</th>  
                    </tr>
                    @break  
                    @endif
                  @endforeach
                @endforeach
              @else
                <tr>
                    <td colspan="4"><h3>No se encontró ninguna universidad</h3></td>
                </tr>
              @endif
        </tbody>
      </table>
</div>

@endsection
