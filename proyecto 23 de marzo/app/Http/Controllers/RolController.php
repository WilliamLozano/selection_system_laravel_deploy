<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
    public function index()
    {
        // Aquí puedes mostrar una lista de todos los resultados de proceso
        $roles = Rol::all();
        return view('roles.index', compact('resultados'));
    }

    

    public function store(Request $request)
    {

        // dd($request->all());


        // Validar los datos recibidos del formulario
        $request->validate([
            'nombre_rol' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo candidato en la base de datos
        Rol::create($request->all());
        // Redirigir de vuelta a la lista de resultados de proceso con un mensaje de éxito
        return redirect()->route('role.create');
    }

}
