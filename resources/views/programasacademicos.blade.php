@extends('template')

@section('titulo')
    Programas Academicos
@endsection

@section('contenido')
<div class="main-header mt-3 ">
    <a href="\" class="h5 text-info ml-5">Inicio</a>
    <a>></a>
    <a href="{{route('programasacademicos')}}" class="h5 text-dark">Programas Académicos</a>

</div>
<div class="row justify-content-center main-header">
<div class="">
    <div class="row">
        <div class=" mt-3">
            <div class="container text-center">
                <h1 class="text-center">Programas Académicos</h1>
            </div><!-- /.col -->
            <form method="POST" action="{{route('filtroprograma')}}"class="form">
                @csrf
                <div class="row text-left">
                    <div class="col form-group ml-3">
                        <label for="buscar">Buscar</label>
                        <input class="form-control" name="busqueda" type="text" placeholder="Búsqueda" aria-label="Search" >
                    </div>
                    <div class="col form-group">
                        <label for="">Grado Academico</label>
                        <select class="form-control" name="grado" id="">
                            <option value="4">Todas</option>
                            <option value="0">Carrera Profesional</option>
                            <option value="1">Maestria</option>
                            <option value="2">Doctorado</option>
                            <option value="3">Segunda Especialidad</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="">Orden</label>
                        <select class="form-control" name="orden" id="">
                            <option value="asc">Ascendente</option>
                            <option value="desc">Descendente</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="">Cantidad</label>
                        <select class="form-control" name="cantidad" id="">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <button type="submit" class="btn btn-secondary btn-lg">Aplicar</button>
                    </div>
                </div>
            </form>
            <div class="row pl-2">

                <table class="table table-striped pl-2">
                    <thead class="thead-dark">
                      <tr>
                        <th class="border border-dark"  scope="col">Nombre</th>
                        <th class="border border-dark" >Nivel Academico</th>
                        <th class="border border-dark"></th>
                      </tr>
                    </thead>
                    <tbody>

                        @if (!$programas->isEmpty())
                           @foreach ($programas as $pro)
                               <tr>
                                    <td>{{ $pro->ProNom }}</td>
                                    @if ($pro->ProNivAca==0)
                                    <td>Carrera Profesional</td>
                                    @endif
                                @if ($pro->ProNivAca==1)
                                    <td>Maestria</td>
                                    @endif
                                @if ($pro->ProNivAca==2)
                                     <td>Doctorado</td>
                                     @endif
                               @if ($pro->ProNivAca==3)
                                    <td>Segunda Especialidad</td>


                                @else


                                @endif
                                     <td><a href="{{route('programasacademicos/',$pro->ProCod )}}">Detalles</a></td>
                               </tr>
                           @endforeach
                        @endif
                    </tbody>
                  </table>
            </div>
            {{$programas->links()}}
        </div>
    </div>
</div>
</div>
@endsection
