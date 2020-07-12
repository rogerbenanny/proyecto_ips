@extends('template')

@section('titulo')
Universidad
@endsection

@section('contenido')

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
            <tr>
            <th scope="row">{{$universidad->UniCod}}</th>
            <td>{{$universidad->UniNom}}</td>
            <td>{{$universidad->UniTipGes == 0 ? 'Publico' : 'Privado'}}</td>
            <td>{{$universidad->UniEstLic == 1 ? 'Licenciada' : 'No Licenciada'}}</td>
            <td>{{$universidad->UniPerLic}}</td>
            </tr>
        </tbody>
      </table>
</div>

@endsection
