@extends('template')

@section('titulo')
    Universidades
@endsection

@section('contenido')
    <div class="main-header mt-3  ">
        <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
        <a>></a>
        <a href="{{route('universidades')}}" class="h5 text-info" style="background-color:white">Universidades</a>
    </div>
    <div class="container-fluid main-header text-center">
        <div class="row">
            <div class="col-2 accordion ml-3 mt-5" id="accordionExample">
                <div class="card">
                    <div class="" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <a class="font-weight-bold text-dark">Departamento</a>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <a class="dropdown-item" href="\">Arequipa(2)</a>
                            <a class="dropdown-item" href="#">Ayacucho(11)</a>
                            <a class="dropdown-item" href="#">Ica</a>
                            <a class="dropdown-item" href="#">Moquegua</a>
                            <a class="dropdown-item" href="#">Tacna</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <a class="font-weight-bold text-dark">Nivel Académico</a>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <a class="font-weight-bold text-dark">Años de Licenciamiento</a>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        Numero 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 pl-5 mt-3">
                <div class="container text-center">
                    <h1>Universidades del Perú</h1>
                </div><!-- /.col -->
                <form method="POST" action="{{route('filtro')}}"class="form">
                    @csrf
                    <div class="row text-left">
                        <div class="col form-group ml-3">
                            <label for="buscar">Buscar</label>
                            <input class="form-control" name="busqueda" type="text" placeholder="Búsqueda" aria-label="Search" >
                        </div>
                        <div class="col form-group">
                            <label for="">Gestión</label>
                            <select class="form-control" name="gestion" id="">
                                <option value="0">Público</option>
                                <option value="1">Privado</option>

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
                        <div class="col form-group mt-4">
                            <button type="submit" class="btn btn-secondary btn-lg" style="">Aplicar</button>
                        </div>
                    </div>
                </form>
                <div class="row pl-2">
                    <table class="table table-striped pl-2">
                        <thead class="thead-dark">
                          <tr>
                            <th class="border border-dark"  scope="col">Nombre</th>                        
                            <th class="border border-dark" ></th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (!$universidades->isEmpty())
                                @foreach ($universidades as $uni)
                                <tr>
                                       
                                        <td>{{$uni->UniNom}}</td>
                                        <td><a href="{{route('universidades/',$uni->UniCod )}}">Detalles</a></td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4"><h3>No se encontró ninguna universidad</h3></td>
                            </tr>
                            @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
