@extends('layouts.app')

@section('content')
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">

                <a class=" boton-crear" href="{{route('municipio.create')}}">crear municipios</a>
                <a class="boton-ver">ver departamento</a>

            </section>
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>

<section class="registro">

<form action="{{route('departamento.store')}}" method="post" class="registro-form">


@csrf
    <section class="datos">

        departamento <input type="text" name="nombre_departamento">


    <button type="submit">
        enviar
    </button>
    </section>
</form>


</section>
</section>
@endsection


