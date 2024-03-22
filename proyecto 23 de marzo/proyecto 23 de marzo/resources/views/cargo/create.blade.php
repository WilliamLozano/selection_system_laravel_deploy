
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
            <section class="registro-form" >
                <form action="{{route('cargo.store')}}" method="post" >
                    @csrf
                        <section class="datos">


                        <label>ocupacion</label>
                        <select name='id_ocupacion' class="datos">
                            @foreach ($ocupaciones as $ocupacion)
                            <option value="{{$ocupacion->id}}">{{$ocupacion->nombre_ocupacion}}</option>

                            @endforeach

                        </select>
                        nombre de cargo <input type="text" name="nombre_cargo">
                        descripcion <input type="text" name='descripcion'>






                        </section >

                            <section class="datos">

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

    </section>



@endsection




