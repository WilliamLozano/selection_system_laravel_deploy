<?php

namespace App\Http\Controllers;

use App\Models\ResultadoProceso;
use App\Models\Candidato;
use App\Models\ProcesoSeleccion;
use App\Models\EtapaProceso;
use Illuminate\Http\Request;

class ResultadoProcesoController extends Controller
{
    public function index()
    {
        // Aquí puedes mostrar una lista de todos los resultados de proceso
        $resultados = ResultadoProceso::all();
        return view('resultados.index', compact('resultados'));
    }

    public function create()
    {
        // Obtener todos los candidatos, procesos de selección y etapas del proceso
        $candidatos = Candidato::all();
        $procesosSeleccion = ProcesoSeleccion::all();
        $etapasProceso = EtapaProceso::all();

        // Retornar la vista con los datos necesarios
        return view('resultados.create', compact('candidatos', 'procesosSeleccion', 'etapasProceso'));
    }

    public function store(Request $request)
    {

        // dd($request->all());


        // Validar los datos recibidos del formulario
        $request->validate([
            'candidato_id' => 'required|exists:candidatos,id',
            'etapa_proceso_id' => 'required|exists:etapas_proceso,id',
            // Asegúrate de que los nombres de los campos coincidan con los del formulario
            'resultado' => 'required|string|max:255', // Ajusta las reglas de validación según sea necesario
        ]);
    
            ResultadoProceso::create([
                'candidato_id' => $request->input('candidato_id'),
                'etapa_proceso_id' => $request->input('etapa_proceso_id'),
                // Asegúrate de usar el nombre correcto del campo del formulario
                'resultado' => $request->input('resultado'),
                // Puedes agregar más campos aquí según sea necesario
            ]);
    
        // Redirigir de vuelta a la lista de resultados de proceso con un mensaje de éxito
        return redirect()->route('resultados.index')->with('success', 'Resultado de proceso creado exitosamente.');
    }

    // Aquí puedes agregar más métodos para mostrar, actualizar y eliminar resultados de proceso según sea necesario
}
