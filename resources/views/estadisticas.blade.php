@extends("theme.$theme.layout1")

@section('titulo')
    Estadisticas
@endsection

@section('contenido')
<div class="content-wrapper ">
    <div class="ml-2">
        <a href="\" class="h5 text-info ml-5" >Inicio</a>
        <a>></a>
        <a href="{{route('estadisticas')}}" class="h5 text-dark" >Estadisticas</a>
    </div>
        @php
            $depart=array();
            $i=0;
        @endphp

        @foreach ($departamentos as $d)
            @php
                $depart[]=0;
            @endphp
        @endforeach
        @foreach ($departamentos as $dep)
            @foreach ($direcciones as $dir)
               @if ($dep->DepCod==$dir->DepCod)
                    @foreach ($filiales as $fil)
                        @if ($fil->DirCod==$dir->DirCod)
                           @php
                               $depart[$i]+=1;

                           @endphp
                        @endif

                    @endforeach

               @endif

            @endforeach
            @php
                $i++;
            @endphp
        @endforeach
    <div class="row ml-5 justify-content-center">
    <div  >
        <div id="piechart_3d" style="width: 1000px; height: 700px;"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Amazonas',{{$depart[0]}}],
            ['Ancash', {{$depart[1]}}],
            ['Apurimac', {{$depart[2]}} ],
            ['Arequipa',{{$depart[3]}} ],
            ['Ayacucho',  {{$depart[4]}} ],
            ['Cajamarca',  {{$depart[5]}} ],
            ['Callao', {{$depart[6]}} ],
            ['Cusco',{{$depart[7]}} ],
            ['Huancavelica',     {{$depart[8]}}],
            ['Huánuco',     {{$depart[9]}}],
            ['Ica',     {{$depart[10]}}],
            ['Junín',     {{$depart[11]}}],
            ['La Libertad',     {{$depart[12]}}],
            ['Lambayeque',     {{$depart[13]}}],
            ['Lima',     {{$depart[14]}}],
            ['Loreto',     {{$depart[15]}}],
            ['Madre de Dios',     {{$depart[16]}}],
            ['Moquegua',     {{$depart[17]}}],
            ['Pasco',     {{$depart[18]}}],
            ['Piura',     {{$depart[19]}}],
            ['Puno',     {{$depart[20]}}],
            ['San Martin',     {{$depart[21]}}],
            ['Tacna',     {{$depart[22]}}],
            ['Tumbes',     {{$depart[23]}}],
            ['Ucayali',     {{$depart[24]}}],
          ]);

          var options = {
            title: 'Filiales por Departamento',


            is3D: true,
            backgroundColor:'transparent',
            fontName: '50',
            titleTextStyle:{ color:'dark',
                            fontSize: '30',
                            bold: true,
                            italic: false,

                            },


          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
          chart.draw(data, options);
        }
        </script>
    </div>
</div>
@endsection
