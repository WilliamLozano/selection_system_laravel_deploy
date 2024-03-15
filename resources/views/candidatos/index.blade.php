<!-- resources/views/candidatos/index.blade.php -->

{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}


    <div class="container">
        <h1>Lista de Candidatos</h1>
        <a href="{{ route('candidatos.create') }}" class="btn btn-primary">Crear Candidato</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidatos as $candidato)
                <tr>
                    <td>{{ $candidato->id }}</td>
                    <td>{{ $candidato->nombre }}</td>
                    <td>{{ $candidato->apellido }}</td>
                    <td>{{ $candidato->correo }}</td>
                    <td>{{ $candidato->telefono }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

