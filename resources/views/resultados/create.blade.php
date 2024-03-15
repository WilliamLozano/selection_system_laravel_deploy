<div class="container">
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
    <label for="etapa_id">Etapa Actual:</label>
    <select id="etapa_id" name="etapa_id" class="form-control">
        @foreach ($etapasProceso as $etapa)
            <option value="{{ $etapa->id }}">{{ $etapa->nombre }}</option>
        @endforeach
    </select>
</div>
        



        <!-- Otros campos del formulario para el resultado del proceso -->

        <button type="submit" class="btn btn-primary">Crear Resultado de Proceso</button>
    </form>
</div>
