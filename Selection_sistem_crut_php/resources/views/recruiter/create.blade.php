@extends('layouts.app')

@section('content')

<h1>creador de reclutador</h1>

<form action="{{route('recruiter.store')}}" method="post">
@csrf
    {{-- <h1>creador de reclutador</h1>
        
    Tipo de documento 
        <select name="doc_type" id="doc_type">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
        </select>
    
    Numero de documento <input class="doc_num" type="text" name="doc_num">

    Nombre  <input class="name" type="text" name="name">

    Apellido   <input class="last_name" type="text" name="last_name">

    Numero de telefono <input class="phone" type="text" name="phone">

    Nombre de usurio <input class="user_name" type="text" name="user_name">

    Email <input class="email" type="email" name="email">

    Pasword <input class="Password" type="password" name="password"> --}}

    

    {{-- reclutador --}}

    <input type="text" name="role_id" value="2" hidden>

    fecha de admission <input type="date" name="admission_date">

    <button type="submit">
    enviar
    </button>
    </form>
    
@endsection

