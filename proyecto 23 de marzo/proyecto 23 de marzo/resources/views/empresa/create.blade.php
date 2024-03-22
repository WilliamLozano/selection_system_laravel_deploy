
<!--------------------------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/registar_empresa.css')}}">
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">

                <a class=" boton-crear">ver oferta</a>
                <a class="boton-ver" href="{{route('municipio.create')}}" >crear municipio</a>
                <a class=" boton-ver" href="{{ route('empresa.index') }}">ver empresas</a>
            </section>
        <!--------------------------------------------------------------------------------------------------------------------------------------------->
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>

        </section>

    </section>


    <section class="formularios">
            <section class="barra">
                <samp class="amarillo">Registrar</samp>
                <samp >empresa</samp>

            </section>


        <section class="registro">
                <form action="{{route('empresa.store')}}" method="post" class="registro-form">
                    @csrf

                    <section class="datos">


                            <section for="nombre_empresa">
                                <h1>nombre de empresa </h1>
                                <input id="nombre_empresa" name="nombre_empresa">
                            </section>



                            <section for="razon social">
                                <h1>razon social </h1>
                                <input id="razon social" name="razon_social">
                            </section>






                                <label for="direccion">
                                    <h1>direccion</h1>
                                    <input id="direccion" name="direccion">
                                </label>

                                <label for="telefono">
                                    <h1>telefono</h1>
                                    <input id="telefono" name="telefono">
                                </label>

                                <label for="ciudad">
                                    <h1>ciudad</h1>
                                    <!-- <input id="ciudad" name="id_municipio"> -->
                                    <select name="id_municipio" class="datos">
                                        @foreach($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->nombre_municipio }}</option>
                                        @endforeach
                                    </select>
                                </label>


                        <h1>registar manual de funciones </h1>
                        <input type="file">
                </section>

                <section class="datos">
                    <button type="submit" class="">
                        enviar
                    </button>
                </section>
            </form>

        </section>

    </section>
</section>


@endsection







<!--------------------------------------------------------------------------------------------------------------------------------------------->

