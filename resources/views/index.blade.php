
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<!--------------------------------------------------------------------------------------------------------------------------------------------->

<section class="contenedor-informacion">
        <section class="espacio-informacion">

                <!-- <article class="contenedor-imagen">
                    <img class="imagen" src="/Reclutador/img/logo-amarillo.jpg"/>
                </article> -->

                <article class="titulo">
                        <h1>R</h1>
                        <h1 class="system">eclutador</h1>
                </article>
        </section>






        <!--------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="controles-index">
            <section class="espacio">
            <section class="control-empresas">
                    <section class="dibujo">
                    </section>
                        <a class="boton1" href="{{route('empresa.index')}}">
                            ver empresa
                        </a>
                        <a class= "boton2" href="{{route('empresa.create')}}">
                            registrar empresa
                    </a>
            </section>
            <section class="control-empresas">
                    <section class="dibujo">
                    </section>
                        <a class="boton1" href="{{route('candidatos.index')}}">
                            ver candidatos
                        </a>
                        <a class="boton2" href="{{route('candidatos.create')}}">
                            crear candidatos
                        </a>
                        
                    </a>
            </section>
                <section class="control-ofertas">
                    <section class="dibujo">
                    </section>
                        <a class="boton1" href="{{route('vacante.index')}}" >
                            ver oferta
                        </a>
                        <a class= "boton2" href="{{route('vacante.create')}}" >
                            registrar oferta
                        </a>
            </section>
            </section>


    </section>
</section>
<!--------------------------------------------------------------------------------------------------------------------------------------------->

@endsection
