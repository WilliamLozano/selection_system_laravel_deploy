<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\ProcesoSeleccion;
use App\Models\EtapaProceso; 
use Illuminate\Http\Request;

class ProcesoSeleccionController extends Controller
{
    public function index()
    {
        $procesosSeleccion = ProcesoSeleccion::with(['candidato', 'etapaProceso'])->get();
        return view('procesos_seleccion.index', compact('procesosSeleccion'));
    }

    public function create()
    {
        // Obtener todas las etapas del proceso de selección
        $etapas = EtapaProceso::all();
        
        // Obtener una lista de candidatos para mostrar en el formulario
        $candidatos = Candidato::all();
        
        return view('procesos_seleccion.create', compact('etapas', 'candidatos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidato_id' => 'required|exists:candidatos,id',
            // Aquí puedes agregar más reglas de validación según sea necesario
        ], [
            'candidato_id.required' => 'El campo Candidato es obligatorio.',
            'candidato_id.exists' => 'El candidato seleccionado no es válido.',
        ]);
    
        ProcesoSeleccion::create([
            'candidato_id' => $request->input('candidato_id'),
            'etapa_id' => $request->input('etapa_id'), // Obtenemos la etapa seleccionada del formulario
            // Aquí asigna los valores recibidos del formulario al modelo ProcesoSeleccion
        ]);
    
        return redirect()->route('procesos_seleccion.index')->with('success', 'Proceso de selección creado exitosamente.');
    }

}
