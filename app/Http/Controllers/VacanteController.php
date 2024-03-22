<?php

namespace App\Http\Controllers;
use App\Models\Cargo;

use App\Models\Empresa;
use App\Models\Horario;
use App\Models\Salario;
use App\Models\Vacante;
use App\Models\Contrato;
use App\Models\Municipio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VacanteController extends Controller
{
    //
    public function store(Request $request){

    Vacante::create([

        'numero_vacante'=>$request->numero_vacante,
        'meses_experiencia'=>$request->meses_experiencia,
        'id_empresa'=>$request->id_empresa,
        'pais'=>$request->pais,
        'salario'=>$request->salario,
        'fecha_inicio'=>$request->fecha_inicio,
        'fecha_cierre'=>$request->fecha_cierre,
        'id_municipio'=>$request->id_municipio,
        'id_horario'=>$request->id_horario,
        'id_salario'=>$request->id_salario,
        'id_contrato'=>$request->id_contrato,
        'id_cargo'=>$request->id_cargo,





    ]);

    return redirect()->back();

    }

    public function create(){
        $empresas =Empresa::all();
        $cargos =Cargo::all();
        $contratos =Contrato::all();
        $salarios = Salario::all();
        $horarios = Horario::all();
        $municipios = Municipio::all();
        return view('vacante.create',
            compact(
            'empresas',
            'cargos',
            'contratos',
            'salarios',
            'horarios',
            'municipios'

        ));
    }

    public function index(){
        $vacantes=Vacante::all();
        return view('vacante.index',['vacantes'=>$vacantes]);
    }

}
