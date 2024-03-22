@extends('layouts.app')

@section('content')

<form action="{{route('user.store')}}" method="POST">
@csrf
<h1>creador de usario</h1>
        
    Tipo de documento 
        <select name="doc_type" id="doc_type">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
        </select>
    
    

    Nombre  <input class="name" type="text" name="name">

    Apellido   <input class="last_name" type="text" name="last_name">

    

    Nombre de usurio <input class="user_name" type="text" name="user_name">

    Email <input class="email" type="email" name="email">

    Pasword <input class="Password" type="password" name="password">

    rol id <input class="role_id" type="text" name="role_id">

    <button type="submit">
        enviar

    </button>

</form>

@endsection