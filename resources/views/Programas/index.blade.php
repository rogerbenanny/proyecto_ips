@extends("theme.$theme.layout1")
@section('titulo')
    Programas Academicos
@endsection
@section('contenido')


<div class="container-fluid main-header text-center">
    <div class="row justify-content-center">

        <div class="col-8 mt-3 text-center">
            <div class="container row text-center">
                <h1 class="text-center">Programas Academicos Peru</h1>
            </div><!-- /.col -->
            <form method="POST" action="{{route('filtro1')}}"class="form">
                @csrf
                <div class="row text-left">
                    <div class="col form-group ml-3">
                        <label for="buscar">Buscar</label>
                        <input class="form-control" name="busqueda" type="text" placeholder="Búsqueda" aria-label="Search" >
                    </div>
                    <div class="col form-group">
                        <label for="">Nivel Académico</label>
                        <select class="form-control" name="nivel" id="">
                            <option value="0">Carrera Profesional</option>
                            <option value="1">Maestría</option>
                            <option value="2">Doctorado</option>
                            <option value="3">2da Especialidad</option>
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
                            <option value="200">200</option>

                        </select>
                    </div>
                    <div class="col form-group">
                        <button type="submit" class="btn btn-success btn-lg">Aplicar</button>
                    </div>
                </div>
            </form>
            <div class="row pl-2">
                <table   class="table table-bordered table-striped text-left">
                    <thead>
                      <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Nivel Academico</th>


                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!$programas->isEmpty())
                            @foreach ($programas as $uni)
                                <tr>
                                    <td text-left>{{$uni->ProNom}}</td>
                                    <td>@if($uni->ProNivAca==0)
                                    CARRERA PROFESIONAL
                                    @else
                                    @if($uni->ProNivAca==1)
                                    MAESTRIA
                                    @else
                                    @if($uni->ProNivAca==2)
                                    DOCTORADO
                                    @else

                                    @if($uni->ProNivAca==3)
                                    SEGUNDA CARRERA
                                    @endif
                                    @endif
                                    @endif
                                    @endif</td>
                                    <td><button type="button" class="btn btn-block btn-success btn-sm"><a href="{{route('programa/',$uni->ProCod )}}" style="color:white";>Detalles</button></td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4"><h3>No se encontró el programa academico</h3></td>
                        </tr>
                        @endif

                    </tbody>
                  </table>

            </div>
            {{$programas->links()}}
        </div>
    </div>
</div>
@endsection
