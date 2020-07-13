@extends('template')

@section('titulo')
Universidad
@endsection

@section('contenido')
<div class="main-header mt-3  ">
    <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
    <a>></a>
    <a href="{{route('universidades')}}" class="h5 text-info" style="background-color:white">ProgramasAcademicos</a>
    
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
            
        </tbody>
      </table>
</div>

@endsection
