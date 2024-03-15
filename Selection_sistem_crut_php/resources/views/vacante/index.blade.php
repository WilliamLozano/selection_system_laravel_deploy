@extends('layouts.app')

@section('content')

<section class="contenido">
    <section class="controles-registro">
            <section class="logo">
                <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
            </section>

            <section class="filtro">
                <section class="botones">
                    <a class=" boton-crear" href="{{ route('vacante.create') }}">crear vacante</a>
                    <a class=" boton-ver" href="{{ route('empresa.index') }}">ver empresas</a>
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
                        @forelse($vacantes as $vacante)
                        <section class="datos-registro">
                                <p>{{$vacante->empresa->nombre_empresa}}</p>
                                <p>{{$vacante->cargo->ocupacion->nombre_ocupacion}}</p>
                                <p>{{$vacante->cargo->nombre_cargo}}</p>
                                <p>{{$vacante->municipio->nombre_municipio}}</p>
                                <p>{{$vacante->salario}}</p>
                                <p>{{$vacante->horario->tipo_horario}}</p>
                                
                                <p>{{$vacante->contrato->tipo_contrato}}</p>
                                
                                
                        </section>



                        @empty
                        <p>No hay datos</p>
                        @endforelse


                </section>
        </section>
</section>

@endsection
