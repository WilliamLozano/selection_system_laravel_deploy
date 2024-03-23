@extends('layouts.app')

@section('content')

<form action="{{route('funcion.store')}}" method="POST">
@csrf

id de ocupacion <input type="text" name="id_ocupacion">

funcion <input type="text" name="funcion">


<button type="submit">
    enviar
</button>

</form>

@endsection