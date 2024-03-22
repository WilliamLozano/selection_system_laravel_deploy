<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Ocupacion;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    //
    public function store(Request $request){
        Cargo::create([
            'nombre_cargo'=>$request->nombre_cargo,
            'descripcion'=>$request->descripcion,
            'id_ocupacion'=>$request->id_ocupacion
        ]);

        return redirect()->back()->with('succes','cargo creada');
    }

    public function create(){
        $ocupaciones=Ocupacion::all();
        return view('cargo.create', compact('ocupaciones'));
    }
}
