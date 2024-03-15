@extends('layouts.app')

@section('content')

<form action="{{route('departamento.store')}}" method="post">
    @csrf

    departamento <input type="text" name="nombre_departamento">

    <button type="submit">
        enviar
    </button>

@endsection
