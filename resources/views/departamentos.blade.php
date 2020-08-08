@extends('template')

@section('titulo')
    Departamentos
@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="main-header ">
        <a href="\" class="h5 text-info ml-5" style="background-color:white">Inicio</a>
        <a>></a>
        <a href="{{route('departamentos')}}" class="h5 text-dark" style="background-color:white">Departamentos</a>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
  </head>
  <body>
    
    <script>

function initialize() {
  var myLatLng = {lat: 19.4236295, lng: -99.16330519999997};
  var mapOptions = {
    zoom:11,
    center:myLatLng
  }

  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <div id="map"></div>
</div>
@endsection
