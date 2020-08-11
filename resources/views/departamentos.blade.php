@extends("theme.$theme.layout1")

@section('titulo')
    Departamentos
@endsection
@section('contenido')
<div class="mapcontainer">
    <div class="map">
    </div>
</div>
@endsection
@section('ss')
<script type="text/javascript">
    $(function () {
        $(".mapcontainer").mapael({
            map: {
                // Set the name of the map to display
                name: "peru"
            },
            areas: {"arequipa": {
                    value: "2617939",
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Arequipa</span><br />xdxd"}
                }
                }

        });
    });

</script>

@endsection


