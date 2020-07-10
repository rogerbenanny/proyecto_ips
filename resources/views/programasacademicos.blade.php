@extends('template')

@section('titulo')
    Programas Academicos
@endsection

@section('contenido')
    <div class="main-header mt-3  ">
        <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
        <a>></a>
        <a href="{{route('programasacademicos')}}" class="h5 text-dark" style="background-color:white">Programas Academicos</a>
    </div>
@endsection

