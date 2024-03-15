@extends('layouts.app')

@section('content')

<form action="{{route('salario.store')}}" method="post">
@csrf

el tipo de salario <input type="text" name="tipo_salario">



<button type="submit">
    enviar
</button>

</form>

@endsection