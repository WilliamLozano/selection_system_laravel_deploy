@extends('layouts.app')

@section('content')

{{-- <link rel="stylesheet" href="/css/index.css"> --}}

<div class="container">
    <h2>Lista de Usuarios</h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre del rol</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $role)
                    <tr >
                        <td>{{$role->role_name}}</td>
                        <td>{{$role->description}}</td>
                    </tr>
                
            </tbody>
            @empty
            <p>No hay datos</p>
            @endforelse
        </table>
        
</div>
@endsection


    

    


