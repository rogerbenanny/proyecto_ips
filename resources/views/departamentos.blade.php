@extends("theme.$theme.layout1")

@section('titulo')
    Departamentos
@endsection
@section('contenido')
<div class="content-wrapper ">
    <div class="ml-2">
        <a href="\" class="h5 text-info ml-5" >Inicio</a>
        <a>></a>
        <a href="{{route('departamentos')}}" class="h5 text-dark" >Departamentos</a>
    </div>
    <div><a class="h1 row justify-content-center">Mapa del Peru</a>
    </div>
    <div class="row justify-content-center">

        <div class="mapcontainer " >
            <div class="map" style="width: auto; height: auto;" >
            </div>
        </div>
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
                attrs: {
                            fill: "#31DBA2"
                        }
                        , attrsHover: {
                            fill: "#33AB83"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Arequipa</span><br />Universidades :10"}},

                    "tacna": {
                        attrs: {
                            fill: "#6EF517"
                        }
                        , attrsHover: {
                            fill: "#17F550"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Tacna</span><br />Universidades:2"}},

                    "moquegua": {
                        attrs: {
                            fill: "#17F5F5"
                        }
                        , attrsHover: {
                            fill: "#17CDF5"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Moquegua</span><br />Universidades:3"}},

                    "puno": {
                        attrs: {
                            fill: "#E1F517"
                        }
                        , attrsHover: {
                            fill: "#C3F517"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Puno</span><br />Universidades:3"}},

                    "ayacucho": {
                        attrs: {
                            fill: "#17F5F5"
                        }
                        , attrsHover: {
                            fill: "#17D7F5"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Ayacucho</span><br />Universidades:3"}},

                    "ica": {
                        attrs: {
                            fill: "#DA17F5"
                        }
                        , attrsHover: {
                            fill: "#F217F5"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Ica</span><br />Universidades:3"}},

                    "cusco": {
                        attrs: {
                            fill: "#1797F5"
                        }
                        , attrsHover: {
                            fill: "#1775F5"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Cusco</span><br />Universidades:12"}},

                    "apurimac": {
                        attrs: {
                            fill: "#F52417"
                        }
                        , attrsHover: {
                            fill: "#F53F17"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Apurimac</span><br />Universidades:2"}},

                    "huancavelica": {
                        attrs: {
                            fill: "#6A7AB8"
                        }
                        , attrsHover: {
                            fill: "#8E9FE1"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Huancavelica</span><br />Universidades:6"}},

                    "lima": {
                        attrs: {
                            fill: "#903A12"
                        }
                        , attrsHover: {
                            fill: "#C86E45"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Lima</span><br />Universidades:38"}},

                    "junin": {
                        attrs: {
                            fill: "#3A640D"
                        }
                        , attrsHover: {
                            fill: "#74CA18"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Junin</span><br />Universidades:14"}},

                    "ucayali": {
                        attrs: {
                            fill: "#3EF064"
                        }
                        , attrsHover: {
                            fill: "#18A837"
                        },


                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Ucayali</span><br />Universidades:4"}},

                    "pasco": {
                        attrs: {
                            fill: "#4DEEE9"
                        }
                        , attrsHover: {
                            fill: "#9BE1DF"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Pasco</span><br />Universidades:3"}},

                    "ancash": {
                        attrs: {
                            fill: "#B96ED3"
                        }
                        , attrsHover: {
                            fill: "#C150E8"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Ancash</span><br />Universidades:5"}},

                    "huanuco": {
                        attrs: {
                            fill: "#E4B32F"
                        }
                        , attrsHover: {
                            fill: "#EDBF44"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Huanuco</span><br />Universidades:4"}},

                    "la_ĺibertad": {
                        attrs: {
                            fill: "#1CC2DF"
                        }
                        , attrsHover: {
                            fill: "#1CDFB0"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">La Libertad</span><br />Universidades:10"}},

                    "loreto": {
                        attrs: {
                            fill: "#1C98DF"
                        }
                        , attrsHover: {
                            fill: "#1CCADF"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Loreto</span><br />Universidades:8"}},

                    "cajamarca": {
                        attrs: {
                            fill: "#DC5686"
                        }
                        , attrsHover: {
                            fill: "#E880A5"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Cajamarca</span><br />Universidades:9"}},

                    "lambayeque": {
                        attrs: {
                            fill: "#79DD44"
                        }
                        , attrsHover: {
                            fill: "#8DEF59"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Lambayeque</span><br />Universidades:5"}},

                    "amazonas": {
                        attrs: {
                            fill: "#72EF59"
                        }
                        , attrsHover: {
                            fill: "#489039"
                        },


                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Amazonas</span><br />Universidades:3"}},

                    "tumbes": {
                        attrs: {
                            fill: "#A6B11E"
                        }
                        , attrsHover: {
                            fill: "#CEDC1A"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Tumbes</span><br />Universidades:1"}},

                    "piura": {
                        attrs: {
                            fill: "#DC931A"
                        }
                        , attrsHover: {
                            fill: "#E39A20"
                        },

                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Piura</span><br />Universidades:7"}},

                    "san_martin": {
                        attrs: {
                            fill: "#478DA5"
                        }
                        , attrsHover: {
                            fill: "#6AAEC6"
                        },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">San Martin</span><br />Universidades:8"}},

                    "madre_de_dios": {
                        attrs: {
                            fill: "#75C66A"
                        }
                        , attrsHover: {
                            fill: "#0FAD78"
                        },


                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Madre de Dios</span><br />Universidades:3"}}

                }

        });
    });

</script>

@endsection
