<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    //
    public function store(Request $request){
        Cargo::create([
            'nombre_cargo'=>$request->nombre_cargo,
            'descripcion'=>$request->descripcion,
            'codigo_ocupacion'=>$request->codigo_ocupacion
        ]);

        return redirect()->back()->with('succes','cargo creada');
    }

    public function create(){
        return view('cargo.create');
    }
}
