{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}


<div class="container">
    <h1>Crear Nuevo Proceso de Selección</h1>
    <form action="{{ route('procesos_seleccion.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="candidato_id">Candidato</label>
            <select name="candidato_id" id="candidato_id" class="form-control">
                @foreach ($candidatos as $candidato)
                    <option value="{{ $candidato->id }}">{{ $candidato->nombre }}</option>
                @endforeach
            </select>
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
