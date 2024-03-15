
{{-- NO LE PUSE NADA DE ESTILOS, PORFAVOR PETER PONERLOS, XFA QUE NO SE DONDE ANDAN --}}

@extends('layouts.app')

@section('content')
<section class="contenido">
    <section class="controles-registro">
        <section class="logo">
            <img src="/Reclutador/img/logo-amarillo.jpg" alt="">
        </section>

        <section class="filtro">
            <section class="botones">
                
                <a class="boton-crear" href="{{ route('roles.create') }}">crear roles</a>
                <a class=" boton-ver" href="{{ route('candidatos.index') }}">ver candidatos</a>
                
                    




                
                
            </section> 
        <!--------------------------------------------------------------------------------------------------------------------------------------------->
        </section>
        <section class="retroceso">
            <a class="boton inicio-boton" href="{{asset('/')}}" >inicio</a>
        </section>

    </section>
    
<section class="registro">

<form action="{{ route('candidatos.store') }}" class="registro-form" method="POST">
    @csrf
    <section class="formularios">
    <div class="mb-3">
        <label for="id_rol" class="form-label">Rol</label>
        <select class="form-select" id="id_rol" name="id_rol">
            @foreach($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tipo_doc" class="form-label">Tipo de Documento</label>
        <select class="form-select" id="tipo_doc" name="tipo_doc">
            <option value="CC">Cédula de Ciudadanía</option>
            <option value="TI">Tarjeta de Identidad</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label">Documento</label>
        <input type="text" class="form-control" id="documento" name="documento">
    </div>
    <div class="mb-3">
        <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo">
    </div>
    <div class="mb-3">
        <label for="contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</section>





</section>
</section>
@endsection



