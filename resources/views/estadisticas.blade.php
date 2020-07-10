@extends('template')

@section('titulo')
    Estadisticas
@endsection

@section('contenido')
    <div class="main-header mt-3  ">
        <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
        <a>></a>
        <a href="{{route('estadisticas')}}" class="h5 text-dark" style="background-color:white">Estadisticas</a>
    </div>
@endsection
