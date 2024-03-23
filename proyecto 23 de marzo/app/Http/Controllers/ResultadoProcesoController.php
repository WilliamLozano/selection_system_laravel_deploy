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
        try {
            // Validar los datos recibidos del formulario
            $request->validate([
                'candidato_id' => 'required|exists:candidatos,id',
                'etapa_proceso_id' => 'required|exists:etapas_proceso,id',
                'proceso_seleccion_id' => 'required|exists:proceso_seleccion,id', 
                'resultado' => 'required|string|max:255',
            ]);
        
            // Crear un nuevo resultado de proceso en la base de datos
            ResultadoProceso::create([
                'candidato_id' => $request->input('candidato_id'),
                'etapa_proceso_id' => $request->input('etapa_proceso_id'), // Aquí se captura el valor de etapa_id
                'proceso_seleccion_id' => $request->input('proceso_seleccion_id'), 
                'resultado' => $request->input('resultado'),
            ]);
            
        
            // Redirigir de vuelta a la lista de resultados de proceso con un mensaje de éxito
            return redirect()->route('resultados.index')->with('success', 'Resultado de proceso creado exitosamente.');
        } catch (\Exception $e) {
            // Imprimir el mensaje de error
            dd($e->getMessage());
        }
    }

    // Aquí puedes agregar más métodos para mostrar, actualizar y eliminar resultados de proceso según sea necesario
}
