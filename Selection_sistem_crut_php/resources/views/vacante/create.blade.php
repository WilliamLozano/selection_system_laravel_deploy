
@extends('layouts.app')

@section('content')

    


    <section class="contenido">
        <section class="controles-registro">
            <section class="logo">
                <img src="/img/logo-amarillo.jpg" alt="">

            </section>
            <section class="filtro">
                
                <a  class="boton-crear" href="{{route('ocupacion.create')}}">ocupaciones</a>
                <a  class="boton-crear" href="{{route('cargo.create')}}">crear cargo</a>
                <a  class="boton-crear" href="{{route('salario.create')}}">crear salario</a>
                <a  class="boton-crear" href="{{route('horario.create')}}">crear horarrio</a>
                <a  class="boton-crear" href="{{route('contrato.create')}}">crear contrto</a>
                <a class="boton-ver" href="{{route('vacante.index')}}">ver vacante</a>

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
                            



                                <label for="empresa">
                                    empresa<input id="empresa" name="id_empresa">
                                </label>

                                <label for="cargo_principal">
                                    <h2>cargo </h2>
                                    <input id="cargo_principal" name="id_cargo">
                                </label>

                                <label for="numero_vacante">
                                    <h1>numero de vacantes</h1>
                                    <input id="numero_vacante" name="numero_vacante">
                                </label>


                            



                        </section >

                        <section class="datos">
                            <label for="meses_experiencia">
                                <h1>meses de experiencia</h1>
                                <input id="meses_experiencia" name="meses_experiencia">
                            </label>

                            <label for="tipo_contrato">
                                <h1>tipo de contrato</h1>
                                <input id="tipo_contrato" name="id_contrato">
                            </label>

                            <label for="tipo_salrio">
                                <h1>tipo de salrio</h1>
                                <input id="tipo_salario" name="id_salario">
                            </label>

                            <label for="salario">
                                <h1>salario</h1>
                                <input id="salario" name="salario">
                            </label>

                            <label for="jornada_laboral">
                                <h1>jornada laboral</h1>
                                <input id="jornada_laboral" name="id_horario">
                            </label>

                        </section>

                        <section class="datos">
                            <label for="pais">
                                <h1>pais</h1>
                                <input id="pais" name="pais" value="Colombia">
                            </label>



                            <label for="ciudad">
                                <h1>municipio</h1>
                                <input id="ciudad" name="id_municipio">
                            </label>

                            <label for="fecha_inicio">
                                <h1>fecha de inicio</h1>
                                <input id="ciudad" name="fecha_inicio">
                            </label>

                            <label for="fecha_cierre">
                                <h1>fecha de cierre</h1>
                                <input id="ciudad" name="fecha_cierre">
                            </label>

                            </section >

                            <section class="archivar">
                                <h1>registar manual de funciones </h1>
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
<!--------------------------------------------------------------------------------------------------------------------------------------------->
