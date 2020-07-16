@extends("theme.$theme.layout1")
@section('titulo')
    Programas Academicos
@endsection
@section('contenido')

                <!--codigo fuente-->
                @foreach ($clasesprogramas as $lpr )
                    @if ($programas->ProClaProCod==$lpr->ClaProCod)
                    <!--<a  class="h6 text-dark" >Clase Programa: {{$lpr->ClaProNom}}</a>-->
                    @endif
                @endforeach

                @php

                $a=array();
                $d=array();

                @endphp



                @foreach ($localesprograma as $lopro )
                    @if ($programas->ProCod==$lopro->ProCod)
                    <!--<a  class="h6 text-dark" >Local: {{$lopro->ProCod}}</a>-->
                            @foreach ($locales as $lo )
                                @if ($lopro->LocCod==$lo->LocCod)
                                <!--<a  class="h6 text-dark" >Distrito:{{$lo->LocDis}}</a>-->
                                    @foreach ($filiales as $fi )
                                        @if ($lo->FilCod==$fi->FilCod)
                                        <!--<a  class="h6 text-dark" >Filial:{{$fi->FilNom}}</a>-->
                                            @foreach ($universidad as $uni )
                                                @if ($fi->UniCod==$uni->UniCod)
                                                    <!--<a  class="h6 text-dark" >universidad:{{ $uni->UniNom }}</a>-->
                                                    @foreach ($direcciones as $dir )
                                                        @if ($fi->DirCod==$dir->DirCod)
                                                        <!--<a  class="h6 text-dark" >provincia:{{ $dir->DirProNom }}</a>-->
                                                            @foreach ($departamentos as $dep )
                                                                @if ($dir->DepCod==$dep->DepCod)
                                                                <!--<a  class="h6 text-dark" >departamento:{{ $dep->DepNom }}</a>-->
                                                                @break
                                                                @endif
                                                            @endforeach
                                                        @break
                                                        @endif
                                                    @endforeach
                                                @break
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                    @break
                                @endif
                            @endforeach
                        @break
                    @endif
                @endforeach
                <!--fin codigo fuente tablas-->

                <!--inicio codigo fuente tablas 2-->
                @foreach ($localesprograma as $lp )
                        @if ( $programas->ProCod == $lp->ProCod )
                            @foreach ($locales as $local )
                            @if ($lp->LocCod==$local->LocCod)
                                @foreach ($filiales as $fill )
                                @if ($local->FilCod==$fill->FilCod)
                                    @foreach ($universidad as $u )
                                    @if ($fill->UniCod==$u->UniCod)
                                    @if (!in_array($u,$a))
                                    @php
                                    array_push($a,$u)
                                    @endphp
                                    @endif
                                    @endif
                                    @endforeach
                                @endif
                                @endforeach
                        @endif
                        @endforeach
                    @endif

                @endforeach

               <!--fin codigo fuente tablas 2-->



                @if ($programas->ProNivAca == 0)
                <<!--{{ $aa = 'CARRERA PROFESIONAL' }}-->
                    @elseif($programas->ProNivAca == 1)
                    <!--{{ $aa = 'MAESTRIA' }}-->
                        @elseif($programas->ProNivAca == 2)
                        <!--{{ $aa = 'DOCTORADO' }}-->
                            @elseif($programas->ProNivAca == 3)
                            <!--{{ $aa = 'SEGUNDA CARRERA' }}-->
                @endif






<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$programas->ProNom}}</h1>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-success">
                <h3 class="card-title">{{$uni->UniNom}}</h3>
              </div>

              <div class="card-body">
                <div class="container-fluid">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="card-body border border-success ">
                            <a  class="h6 text-dark" >* Clase Programa --> {{$lpr->ClaProNom}} </a>
                            <br>
                            <a  class="h6 text-dark" >* Nivel Academico --> {{ $aa }}</a>
                            <br>
                            <a  class="h6 text-dark" >* Tipo --> {{$programas->ProTipNivAca == 0 ? 'PREGRADO' : 'POSGRADO'}}</a>
                            <br>
                            <a  class="h6 text-dark" >* Gestion --> {{$uni->UniTipGes == 0 ? 'PUBLICO' : 'PRIVADO'}}</a>
                            <br>
                            <a  class="h6 text-dark" >* Departamento --> {{ $dep->DepNom }}</a>
                            <br>
                            <a  class="h6 text-dark" >* Provincia --> {{ $dir->DirProNom }}</a>
                            <br>
                            <a  class="h6 text-dark" >* Distrito --> {{$lo->LocDis}}</a>
                            <br>
                            <a  class="h6 text-dark" >* Filial --> {{$fi->FilNom}}</a>
                            </div>
                        </div>


                            <div class="col">
                                <div class="card-body border border-success ">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                          <tr>

                                            <th scope="col">Universidades</th>
                                            <th></th>


                                          </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($a as $p)
                                                  <tr>
                                                       <td>{{$p->UniNom}}</td>
                                                       <td><a href="{{route('universidades/',$p->UniCod )}}" type="button" class="btn btn-block btn-success btn-sm">Ir</a></td>
                                                  </tr>
                                                @endforeach

                                        </tbody>
                                      </table>
                                </div>
                            </div>
                    </div>
                </div>
              </div>



              <!-- /.card-body -->
              <div class="card-footer">

              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->


  </div>

@endsection

