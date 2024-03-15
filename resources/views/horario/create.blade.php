@extends('layouts.app')

@section('content')

<form action="{{route('horario.store')}}" method="post">
@csrf

horario <input type="text" name="tipo_horario">



<button type="submit">
    enviar
</button>

</form>

@endsection