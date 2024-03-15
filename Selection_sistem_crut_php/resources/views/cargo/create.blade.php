
@extends('layouts.app')

@section('content')

    


    <section class="contenido">
        <section class="controles-registro">
            <section class="logo">
                <img src="/img/logo-amarillo.jpg" alt="">

            </section>
            <section class="filtro">
                
                
                <a  class="boton-crear" href="{{route('vacante.create')}}">crear vacante</a>
                <a  class="boton-crear" href="{{route('ocupacion.create')}}">crear ocupacion</a>
                

            </section>
            <section class="retroceso">
                <a href="{{asset('/')}}" class="boton inicio-boton">inicio</a>

            </section>

        </section>
        <section class="formularios">
            <section class="barra">
                <samp class="amarillo">Registro</samp>
                <samp >oferta</samp>

        </section>
        <section class="registro">
                <form action="{{route('vacante.store')}}" method="post" class="registro-form">
                    @csrf
                        <section class="datos">

                        id de ocupacion <input type="text" name="codigo_ocupacion">
    nombre de cargo <input type="text" name="nombre_cargo">
    descripcion <input type="text" name='descripcion'>
                            



                        

                            </section >

                            <section class="archivar">
                                
                                <button type="submit">
                                enviar
                                </button>

                        </section>
                    </form>

                </section>


            </section>
        </section>
    </section>

    </section>



@endsection




