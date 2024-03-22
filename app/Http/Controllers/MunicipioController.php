<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;


class MunicipioController extends Controller
{
    //
    public function create(){
        $departamentos = Departamento::all();
        return view('municipio.create', compact('departamentos'));
    }
    public function store(Request $request){
        Municipio::create([
            'nombre_municipio'=>$request->nombre_municipio,
            'id_departamento'=>$request->id_departamento,
        ]);

        return redirect()->back();

    }

    public function index()
    {
        $municipios= Municipio::all();
        return view('municipio.index',['municipalities'=>$municipios]);
    }

    public function show(Municipio $municipio)
    {
        //
        return view('municipio.show',['municipilities'=>$municipio]);

    }


}
