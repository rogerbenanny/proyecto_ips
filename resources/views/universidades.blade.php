@extends('template')

@section('titulo')
    Universidades
@endsection

@section('contenido')
    <div class="main-header mt-3  ">
        <a href="\" class="h5 text-info ml-5">Inicio</a>
        <a>></a>
        <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
    </div>
  
        <div class="row justify-content-center mt-4 main-header">
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
                            <th class="border border-dark" >Gestion</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (!$universidades->isEmpty())
                                @foreach ($universidades as $uni)
                                <tr>    
                                        <td>{{$uni->UniNom}}</td>
                                        <td>{{$uni->UniTipGes == 0 ? 'Publico' : 'Privado'}}</td>
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
                {{$universidades->links()}}
            </div>
        </div>
   
@endsection
