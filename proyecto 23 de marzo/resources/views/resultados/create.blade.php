{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}
@extends('layouts.app1')

@section('content')


<div class="container-1 ">
    <h1>Crear Nuevo Resultado de Proceso</h1>
    <form action="{{ route('resultados.store') }}" method="POST">
        @csrf

        <!-- Mostrar la lista de candidatos en un menú desplegable -->
        <div class="form-group">
            <label for="candidato_id">Seleccionar Candidato:</label>
            <select id="candidato_id" name="candidato_id" class="form-control">
                @foreach ($candidatos as $candidato)
                    <option value="{{ $candidato->id }}">{{ $candidato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="etapa_proceso_id">Etapa del Proceso:</label> <!-- Cambiado a etapa_proceso_id -->
            <select id="etapa_proceso_id" name="etapa_proceso_id" class="form-control"> <!-- Cambiado a etapa_proceso_id -->
                @foreach ($etapasProceso as $etapa)
                    <option value="{{ $etapa->id }}">{{ $etapa->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <!-- Agregar menú desplegable para seleccionar el proceso de selección -->
        <div class="form-group">
            <label for="proceso_seleccion_id">Seleccionar Proceso de Selección:</label>
            <select id="proceso_seleccion_id" name="proceso_seleccion_id" class="form-control">
                @foreach ($procesosSeleccion as $proceso)
                    <option value="{{ $proceso->id }}">{{ $proceso->id }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="resultado">Resultado del Proceso:</label>
            <input type="text" id="resultado" name="resultado" class="form-control" placeholder="Ingrese el resultado del proceso">
        </div>
        

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary">Crear Resultado de Proceso</button>
    </form>
</div>

@endsection

