@extends('layouts.app')

@section('content')

<form action="{{route('habilidad.store')}}" method="POST">
@csrf

id de cargo <input type="text" name="id_cargo">

habilidad <input type="text" name="habilidad">



    


<button type="submit">
    enviar
</button>


</form>

@endsection