@extends('layouts.app')

@section('content')
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">
                
                <a class=" boton-crear">ver oferta</a>
                <a class=" boton-ver" href="{{ route('empresa.index') }}">back</a>
                <a class="boton-ver" href="{{route('municipio.index')}}">municipios</a>
                    




                
                
            </section> 
        <!--------------------------------------------------------------------------------------------------------------------------------------------->
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>
    
<section class="registro">

<form action="{{route('municipio.store')}}" method="post" class="registro-form">


@csrf
<section class="datos">

    municipio <input type="text" name="nombre_municipio">
    

    <button type="submit">
        enviar
    </button>
    </section>
</form>


</section>
</section>
@endsection