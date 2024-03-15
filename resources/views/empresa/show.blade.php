@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/show.css')}}"></link>
<section class='contenido'>
    <a href="{{ route('empresa.index') }}" class='retroceso'>back</a>
        <section class="datos">
            <p>{{$empresa->nombre_empresa}}</p>
            <p>{{$empresa->municipio->nombre_municipio}}</p>
            <p>{{$empresa->municipio->departamento}}</p>

        </section>
</section>
@endsection