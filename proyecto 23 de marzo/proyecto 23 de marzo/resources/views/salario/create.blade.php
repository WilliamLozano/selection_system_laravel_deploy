
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
                <a class="boton-ver"></a>

            </section>
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>

<section class="registro">

<form action="{{route('salario.store')}}" method="post" class="registro-form">


@csrf
    <section class="datos">

        salario <input type="text" name="tipo_salario">


    <button type="submit">
        enviar
    </button>
    </section>
</form>


</section>
</section>
@endsection
@extends('layouts.app')

@section('content')

<form action="{{route('salario.store')}}" method="post">
@csrf

el tipo de salario <input type="text" name="tipo_salario">



<button type="submit">
    enviar
</button>

</form>

@endsection
