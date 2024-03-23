<!-- resources/views/resultados/index.blade.php -->

{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}
@extends('layouts.app1')

@section('content')

<div class="container">
    <h1>Lista de Resultados de Proceso</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Candidato</th>
                <th>Etapa</th>
                <th>resultado</th>
                <!-- Agregar más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($resultados as $resultado)
                <tr>
                    <td>{{ $resultado->id }}</td>
                    <td>{{ $resultado->procesoSeleccion->candidato->nombre }}</td>
                    <td>{{ $resultado->procesoSeleccion->etapaProceso->nombre }}</td>
                    <td>{{ $resultado->resultado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection