@extends('layaut.app')

@section('content')

<table>
    <header>
        <tr>
            <th>id</th>
            <th>cargo</th>
        </tr>
    </header>
    <tbody>
        <tr>
            @forelse ($cargos as $cargo)
            <td>{{$cargo->}}</td>
            <td>{{}}</td>

            @empty
            <p>no hay datos</p>
            @endforelse
    </tr>
    </tbody>
</table>

@endsection

@extends('layouts.app')

@section('content')

<section class="contenido">
    <section class="controles-registro">
            <section class="logo">
                <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
            </section>

            <section class="filtro">
                <section class="botones">
                    <a class=" boton-crear" href=""></a>
                    <a class=" boton-ver" href=""></a>
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
                <span class="amarillo"></span>
            </section>
            <!-- ------------------------------------------------------------------------ -->
            <section class="mostar-datos">
                        @forelse($ as $)
                        <section class="datos-registro">
                                <p>{{$->->}}</p>
                                
                                
                                
                                
                                
                        </section>



                        @empty
                        <p>No hay datos</p>
                        @endforelse


                </section>
        </section>
</section>

@endsection
