@extends("theme.$theme.layout1")

@section('titulo')
Locales
@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="main-header ">
        <a href="\" class="h5 text-info ml-5">Inicio</a>
        <a>></a>
        <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
        <a>></a>
        <a href="javascript:history.back(-1);"class="h5 text-info ">Locales</a>
        <a>></a>
        <a  class="h5 text-dark" >{{$local->LocCod}}</a>
    </div>
    <div class="row ml-2 mt-4"> 
   
        <div class="main-header col-6 content-fluid ">
        
            <table id="example2"class="table table-striped border border-dark">
            <thead class="thead-dark">
            <tr>
                <th class="border border-dark"  scope="col">Lista de Programas del Local</th>                        
            
            </tr>
            </thead>
                @php
                    $locpro=array();
                    $program=array();
                @endphp
                @foreach ($localesprogramas as $lc)
                @if ($lc->LocCod==$local->LocCod)
                    @php
                        array_push($locpro,$lc)
                    @endphp
                    
                @endif
                @endforeach
            <tbody>
                @foreach ($locpro as $l)
                    @foreach ($programas as $pro)
                        @if ($l->ProCod==$pro->ProCod)
                            <tr>    
                                <td>{{$pro->ProNom}}</td>
                                
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            
            
            </tbody>
        </table>
    </div>
    <div class="row ml-5">
        <div >
            
            <iframe class="border border-dark"src= "https://maps.google.com/maps?q={{$local->LocLat}},{{$local->LocLon}}&hl=es;z=14&amp;output=embed" width="400" height="400" frameborder="0" ></iframe>
        </div>
    </div>
</div>
        
@endsection
