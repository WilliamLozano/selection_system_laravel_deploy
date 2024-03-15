<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    //
    public function create(){
        return view('departamento.create');
    }

    public function store(Request $request){
        
        Departamento::create([
            'nombre_departamento'=>$request->nombre_departamento,
        ]);

        return redirect()->back();

    }
}
