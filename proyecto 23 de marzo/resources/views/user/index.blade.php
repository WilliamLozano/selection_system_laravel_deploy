@extends('layouts.app')

@section('content')

    {{-- <link rel="stylesheet" href="{{asset('css/index2.css')}}"> --}}

    <div class="container">
        <h2>Lista de Usuarios</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th>Tipo de Documento</th>
                        <th>Número de Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Nombre de Usuario</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                @forelse ($users as $user)
                <tbody>
                    <tr>
                       
                        
                            <td>{{$user->id}}</td>
                            <td>{{$user->role->role_name}}</td>
                            <td>{{$user->doc_type}}</td>
                            <td>{{$user->doc_num}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                    </tr>
                </tbody>
            
                @empty
                    <p>No hay datos</p>
                @endforelse
            </table>
    </div>
@endsection
    

    


