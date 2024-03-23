@extends('layouts.app')

@section('content')



<section class="contenido">
    <section class="controles-registro">
            <section class="logo">
                <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
            </section>

            <section class="filtro">
                <section class="botones">
                    <a class=" boton-crear" href="{{ route('municipio.create') }}">back</a>
                    
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
                <span class="amarillo">municipio</span>
            </section>
            <!-- ------------------------------------------------------------------------ -->
            <section class="mostar-datos">
                        @forelse($municipios as $municipio)
                        <section class="datos-registro">
                                <p>{{$municipio->nombre_municipio}}</p>
                                <p>{{$municipio->departamento->nombre_departamento}}</p>
                                
                                <div class="atuar">
                                <!-- <p><a href="{{ route('municipio.edit',$municipio->id) }} " class="update">actualizar</a></p> -->
                                <p><a href="{{ route('municipio.show',$municipio->id) }}" class="show">ver</a></p>
                                </div>
                                <!-- <p>
                                    <form action="{{ route('municipio.destroy',$municipio->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="DELETE" class="delete">
                                    </form>
                                </div>
                                </p> -->
                        </section>



                        @empty
                        <p>No hay datos</p>
                        @endforelse


                </section>
        </section>
</section>
@endsection