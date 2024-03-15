@extends('layouts.app')

@section('content')

    <a href="{{ route('empresa.index') }}">back</a>
        <form action="{{ route('empresa.update', $empresa->id) }}" method="POST">
         @method('PUT')
            @csrf

            <label for="nombre_empresa">nombre empresa</label>
            <input type="text" name='nombre_empresa' value= '{{$empresa->nombre_empresa}}'>

            <input type="submit" value="update">enviar
        


        </form>
@endsection