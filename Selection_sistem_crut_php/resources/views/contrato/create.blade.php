@extends('layouts.app')

@section('content')

<form action="{{route('contrato.store')}}" method="post">
@csrf

contrato <input type="text" name="tipo_contrato">



<button type="submit">
    enviar
</button>

</form>

@endsection