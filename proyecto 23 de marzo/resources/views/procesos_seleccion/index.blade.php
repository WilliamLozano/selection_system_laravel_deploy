@extends('layouts.app1')

@section('content')

<div class="container">
    <h1 class="ti-1">Lista de Procesos de Selección</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Candidato</th>
                <th>Etapa Actual</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($procesosSeleccion as $proceso)
                <tr>
                    <td>{{ $proceso->id }}</td>
                    <td>{{ $proceso->candidato->nombre }}</td>
                    <td>{{ $proceso->etapaProceso->nombre }}</td>
                    <td>{{ $proceso->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

