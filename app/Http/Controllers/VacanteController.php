<?php

namespace App\Http\Controllers;
use App\Models\Vacante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('vacante.create');
    }

    public function index(){
        $vacantes=Vacante::all();
        return view('vacante.index',['vacantes'=>$vacantes]);
    }

}
