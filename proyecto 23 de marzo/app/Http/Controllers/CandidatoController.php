<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Rol;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::all();
        return view('candidatos.index', compact('candidatos'));
    }

    public function create()
    {
        $roles = Rol::all(); // Obtener todos los roles disponibles
        return view('candidatos.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'id_rol' => 'required|exists:roles,id',
            'tipo_doc' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'nombre_usuario' => 'required|string|max:255|unique:candidatos',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|unique:candidatos|max:255',
            'contraseña' => 'required|string|max:255',
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo candidato en la base de datos
        Candidato::create($request->all());

        // Redirigir a una página de éxito o a la lista de candidatos
        return redirect()->route('candidatos.index')->with('success', 'Candidato creado correctamente.');
    }
    
}
