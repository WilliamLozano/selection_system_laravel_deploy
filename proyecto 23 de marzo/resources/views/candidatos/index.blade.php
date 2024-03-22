<!-- resources/views/candidatos/index.blade.php -->

{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}

@extends('layouts.app')

@section('content')

<section class="contenido">
    <section class="controles-registro">
            <section class="logo">
                <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
            </section>

            <section class="filtro">
                <section class="botones">
                <a href="{{ route('candidatos.create') }}" class="boton-crear">Crear Candidato</a>

                </section>
            <!--------------------------------------------------------------------------------------------------------------------------------------------->
            </section>
            <section class="retroceso">
                <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>

            </section>

    </section>
    <section class="index">
            <section class="barra">
                <span>Lista de </span>
                <span class="amarillo">vacantes</span>
            </section>
            <!-- ------------------------------------------------------------------------ -->
            <section class="mostar-datos">
                        @forelse ($candidatos as $candidato)
                        <section class="datos-registro">
                        <p>{{ $candidato->id }}</p>
                        <p>{{ $candidato->nombre }}</p>
                        <p>{{ $candidato->apellido }}</p>
                        <p>{{ $candidato->correo }}</p>
                        <p>{{ $candidato->telefono }}</p>
                                
                                
                        </section>


                        @empty
                        <p>No hay datos</p>
                        @endforelse


                </section>
        </section>
</section>

@endsection























