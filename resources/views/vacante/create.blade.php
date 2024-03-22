
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
            <section class="registro-form">
                <form action="{{route('vacante.store')}}" method="post" class="registro-form4656">

                    @csrf
                        <section class="datos ">

                                <label>empresa</label>

                                   <select name='id_empresa' class="datos">
                                    @foreach ($empresas as $empresa)
                                    <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
                                    @endforeach

                                   </select>

                                <label>cargo</label>

                                <select name='id_cargo' class='datos'>

                                    @foreach ($cargos as $cargo)
                                    <option value="{{$cargo->id}}">{{$cargo->nombre_cargo}}</option>
                                    @endforeach
                                </select>

                            <label for="meses_experiencia">
                                <h1>meses de experiencia</h1>
                                <input id="meses_experiencia" name="meses_experiencia">
                            </label>


                            <label class="datos">tipo de contrto</label>
                            <select name='id_contrato' class='datos'>

                                @foreach ($contratos as $contrato)
                                <option value="{{$contrato->id}}">{{$contrato->nombre_contrato}}</option>
                                @endforeach
                            </select>


                            <label class="datos">tipo de salario</label>
                            <select name='id_salario' class='datos'>

                                @foreach ($salarios as $salario)
                                <option value="{{$salario->id}}">{{$salario->nombre_salario}}</option>
                                @endforeach
                            </select>


                            <label for="salario">
                                <h1>salario</h1>
                                <input id="salario" name="salario">
                            </label>


                            <label for="jornada_laboral">
                                <h1>jornada laboral</h1>
                                <input id="jornada_laboral" name="id_horario">
                            </label>

                            <label class="datos">tipo de jornada</label>
                            <select name='id_horario' class='datos'>

                                @foreach ($horarios as $horario)
                                <option value="{{$horario->id}}">{{$horario->nombre_horario}}</option>
                                @endforeach
                            </select>





                        <label for="numero_vacante">
                                    <h1>numero de vacantes</h1>
                                    <input id="numero_vacante" name="numero_vacante">
                                </label>

                            <label for="pais">
                                <h1>pais</h1>
                                <input id="pais" name="pais" value="Colombia">
                            </label>



                            <label class="datos">ciudad</label>

                            <select name='id_municipio' class='datos'>

                                @foreach ($municipios as $municipio)
                                <option value="{{$municipio->id}}">{{$municipio->nombre_municipio}}</option>
                                @endforeach
                            </select>

                            <label for="fecha_inicio">
                                <h1>fecha de inicio</h1>
                                <input  name="fecha_inicio">
                            </label>

                            <label for="fecha_cierre">
                                <h1>fecha de cierre</h1>
                                <input name="fecha_cierre">
                            </label>



                            <p class="datos">
                                <button type="submit">
                                enviar
                                </button>
                            </p>


                        </section>

                    </form>
                </section>

                </section>


            </section>
        </section>
    </section>

    </section>



@endsection
<!--------------------------------------------------------------------------------------------------------------------------------------------->
