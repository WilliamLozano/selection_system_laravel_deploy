@extends('layouts.app')

@section('content')



<section class="contenido">
    <section class="controles-registro">
            <section class="logo">
                <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
            </section>

            <section class="filtro">
                <section class="botones">
                    <a class=" boton-crear" href="{{ route('empresa.create') }}">crear empresa</a>
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
                <span class="amarillo">Empresa</span>
            </section>
            <!-- ------------------------------------------------------------------------ -->
            <section class="mostar-datos">
                        @forelse($empresas as $empresa)
                        <section class="datos-registro">
                                <p>{{$empresa->nombre_empresa}}</p>
                                <p>{{$empresa->razon_social}}</p>
                                <p>{{$empresa->municipio->nombre_municipio}}</p>
                                <div class="atua">
                                <p><a href="{{ route('empresa.edit',$empresa->id) }} " class="update">actualizar</a></p>
                                <p><a href="{{ route('empresa.show',$empresa->id) }}" class="show">ver</a></p>
                                <p>
                                    <form action="{{ route('empresa.destroy',$empresa->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="DELETE" class="delete">
                                    </form>
                                </div>
                                </p>
                        </section>



                        @empty
                        <p>No hay datos</p>
                        @endforelse


                </section>
        </section>
</section>
@endsection
