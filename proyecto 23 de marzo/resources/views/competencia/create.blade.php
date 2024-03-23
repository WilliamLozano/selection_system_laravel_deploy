@extends('layouts.app')

@section('content')
<body>


<form action="{{route('competencia.store')}}" method="POST">
@csrf

id de cargo <input type="text" name="id_cargo">

competencia <input type="text" name="competencia">


<button type="submit">
    enviar
</button>

</form>

</body>

@endsection
