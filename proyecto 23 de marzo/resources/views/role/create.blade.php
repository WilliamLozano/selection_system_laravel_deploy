@extends('layouts.app')

@section('content')

    


    <form action="{{route('role.store')}}" method="post">
    @csrf
    
    nombre del rol <input type="text" name="role_name">
    
    description <input type="text" name="description">
    
    <button type="submit">
        enviar
    </button>


</form>
    
@endsection