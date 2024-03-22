
@extends('layouts.app')

@section('content')
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">

                <a class=" boton-crear" href="{{route('vacante.create')}}">crear vacante</a>


            </section>
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>

<section class="registro">

<section class="registro-form">

    <form action="{{route('contrato.store')}}" method="post">
        @csrf
        <section class="datos">

        contrato <input type="text" name="tipo_contrato">


            <button type="submit">
                enviar
            </button>
        </section>
</form>

</section >

</section>

</section>


@endsection
