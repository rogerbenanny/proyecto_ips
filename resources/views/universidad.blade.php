@extends('template')

@section('titulo')
Universidad
@endsection

@section('contenido')
<div class="main-header mt-3  ">
    <a href="\" class="h5 text-info ml-5">Inicio</a>
    <a>></a>
    <a href="{{route('universidades')}}" class="h5 text-info">Universidades</a>
    <a>></a>
    <a  class="h5 text-dark" >{{$universidad->UniNom}}</a>
</div>
<div class="container mt-4 ">
  <div class="text-center ">
    <a  class="h4 text-dark ">{{$universidad->UniNom}}</a>
</div>
<div class="row justify-content-center">
<div class="col-8 form-group ml-3">
  @php
  $filial=array();
  $local=array();
  $depart=array();
  $locpro=array();
  $direccion=array(); 
  $program=array();
  $pre=0;
  $post=0;
  $cf=1;
  $f=1;
  @endphp 
  @foreach ($filiales as $fil)
    @if($fil->UniCod==$universidad->UniCod)
    @php
        array_push($filial,$fil)
      @endphp
    @endif
  @endforeach
  @foreach ($filial as $f)
      @foreach ($direcciones as $dir)
          @if ($f->DirCod==$dir->DirCod)
            @php
            array_push($direccion,$dir)
            @endphp
          @endif                 
      @endforeach
  @endforeach
  @foreach($filial as $f)
    @foreach ($locales as $loc)
       @if($f->FilCod==$loc->FilCod)
          @php
            array_push($local,$loc)
           @endphp
               
        @endif
    @endforeach
  @endforeach
  @foreach($direccion as $d)
  @foreach ($departamentos as $dep)
      @if($d->DepCod==$dep->DepCod)
          @if (!in_array($dep, $depart)) 
            @php
           array_push($depart,$dep)
          @endphp
         @endif 
      @endif
    @endforeach
 @endforeach
  @foreach($filial as $f)
      @foreach($local as $l)
        @if($f->FilCod==$l->FilCod)
          @foreach($localesprogramas as $lp)
            @if($l->LocCod==$lp->LocCod)
              @php
                array_push($locpro,$lp)
              @endphp
            @endif
          @endforeach
        @endif
        @endforeach
  @endforeach
  @foreach($locpro as $lp)
    @foreach($programas as $pro)
      @if($pro->ProCod==$lp->ProCod)
        @php
            array_push($program,$pro)
        @endphp
      @endif
    @endforeach
  @endforeach

    @foreach ($program as $pro)
    @if ($pro->ProTipNivAca==1)
    @php
        $post+=1;
        
    @endphp
      
    @else
    @php
    $pre+=1;

    @endphp

    @endif    
    @endforeach
<table class="table table-striped mt-4 border border-dark">
    <thead class="thead-dark">
      <tr  class="text-center">
        <th colspan="2"  class="border border-dark"  scope="col">Descripcion</th>
        
      </tr>
    </thead>
  <tbody>
    <tr>
      <td><a class="h6 text-dark text-center" >Licenciada</a></td>
      <td><a class="h6 text-dark text-center" >Programas Academicos: {{count($program)}}</a></td>
    </tr>
    <tr>
    <td><a class="h6 text-dark text-center" >Años de Licenciamiento: {{$universidad->UniPerLic}}</a></td>
    <td><a class="h6 text-dark text-right">PostGrado: {{$post}}</a></td>
    </tr>
     
    <tr><td></td><td><a class="h6 text-dark text-right">Pregrado: {{$pre}}</a> </td></tr>
    
    
  </tbody>
  
 @foreach($filial as $f)
 @php
     $cf=1;  
   @endphp
</table>
  
  <table class="table table-striped  mt-3 border border-dark">
      <thead class="thead-dark">
          <tr  class="text-center">
            <th colspan="2"  class="border border-dark"  scope="col">Filial: {{$f->FilNom}}</th>
            
          </tr>

      </thead>

   <tbody>
     <tr>
        @foreach($direccion as $d)
            @if($f->DirCod==$d->DirCod)
              @foreach($depart as $dp)
                @if($d->DepCod==$dp->DepCod)
               
                <td >
                  <a  class="h6 text-dark " style="position:absolute; left:150px;">Gestion: {{$universidad->UniTipGes == 0 ? 'Publico' : 'Privado'}}</a>
                  <br>
                  <a  class="h6 text-dark" style="position:absolute; left:150px;">Departamento: {{$dp->DepNom}}</a>
                  <br>
                  <a  class="h6 text-dark" style="position:absolute; left:150px;">Provincia: {{$d->DirProNom}}</a>
                  <br>
                </td>
          
                @endif
               
              @endforeach
            @endif
    
          @endforeach
       
          <td >
           @foreach ($local as $l)
            @if ($f->FilCod==$l->FilCod)
             
            
              <a href="{{route('universidades/locales',$l->LocCod )}}" class="h6 text-dark "style="position:absolute; left:450px;" >Local {{$cf}}:</a>
              <br>
              <a  class="h6 text-dark" style="position:absolute; left:450px;">Distrito: {{$l->LocDis}}</a>
              <br>
            
         
          @php
            $cf+=1;  
          @endphp
          @endif
          @endforeach         
        </td>
        </tr>          
    </tbody> 
  @endforeach
</table>
    
  </div>
  {{$local->links()}}
</div>
@endsection
