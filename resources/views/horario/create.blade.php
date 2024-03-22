
@extends('layouts.app')

@section('content')
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">

                <a class=" boton-crear" href="{{route('')}}"></a>
                <a class="boton-ver"></a>

            </section>
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>

<section class="registro">

<form action="{{route('horario.store')}}" method="post" class="registro-form">


@csrf
    <section class="datos">

        horario <input type="text" name="tipo_horario">


    <button type="submit">
        enviar
    </button>
    </section>
</form>


</section>
</section>
@endsection
