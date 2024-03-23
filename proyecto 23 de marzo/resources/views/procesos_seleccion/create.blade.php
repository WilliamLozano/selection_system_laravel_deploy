{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}
@extends('layouts.app1')

@section('content')


<div class="container-1 cand">
    <h1 >Crear Nuevo Proceso de Selección</h1>
    <form action="{{ route('procesos_seleccion.store') }}" method="POST">
        @csrf
        <div class="form-group" >
            <label for="candidato_id">Candidato</label>
            <select name="candidato_id" id="candidato_id" class="form-control">
                @foreach ($candidatos as $candidato)
                    <option value="{{ $candidato->id }}">{{ $candidato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Numero del Proceso:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        

        <div class="form-group">
            <label for="etapa_id">Etapa Actual</label>
            <select name="etapa_id" id="etapa_id" class="form-control">
                @foreach ($etapas as $etapa)
                    <option value="{{ $etapa->id }}">{{ $etapa->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Otros campos del formulario -->

        <button type="submit" class="btn btn-primary">Crear Proceso de Selección</button>
    </form>
</div>
@endsection
