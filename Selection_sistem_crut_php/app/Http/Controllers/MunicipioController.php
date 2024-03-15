<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;


class MunicipioController extends Controller
{
    //
    public function create(){
        return view('municipio.create');
    }
    public function store(Request $request){
        Municipio::create([
            'nombre_municipio'=>$request->nombre_municipio,
        ]);

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
