@extends('template')

@section('titulo')
    Universidades
@endsection

@section('contenido')
    <div class="main-header mt-3  ">
        <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
        <a>></a>
        <a href="\universidades" class="h5 text-dark" style="background-color:white"> Universidades</a>
    </div>
    <div class="container-fluid main-header text-center">
        <div class="row ">
            <div class="accordion  main-header mt-5" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
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
                <div class="card-header" id="headingTwo">
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
                <div class="card-header" id="headingThree">
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

        <div class="col-6 ">
            <div class="mt-5">
                <h1>Universidades del Perú</h1>
            </div><!-- /.col -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                </div>
                <div class="col-3 text-left">
                    <a>Buscar</a>
                    <div>
                        <input class="form-control form-control-navbar " type="search" placeholder="Search" aria-label="Search" >
                    </div>
                </div>
                <div class="col-3 ml-3 ">
                    <a>Gestion</a>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle border border-brown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        privado</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">privado</a>
                            <a class="dropdown-item" href="#">publico</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 ml-3">
                    <a>Orden</a>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle  border border-brown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ascendente</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Ascendente</a>
                            <a class="dropdown-item" href="#">Descendente</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-2  ml-5">
                    <button type="button" class="btn btn-secondary btn-sm">Aplicar</button>
                </div>
            </div>
            <textarea  readonly="readonly" name="" id="" type=""cols="120  " rows="14"> </textarea>
        </div>
    </div><!-- /.row -->
@endsection
    <!--Inicio aside-->
