<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuncionController extends Controller
{
    
    

    
    public function store(Request $request)
    {
        
        //dd($request);
        // $request->validate([
        //     'funcion'=>'required',
        //     'id_ocupacion'=>'required',
            
        // ]);
        Funcion::create([
            'funcion'=>$request->funcion,
            'id_ocupacion'=>$request->id_ocupacion,
        
        ]);

        return redirect()->back()->with('succes','cargo creada');

    }

    public function create(){
        return view('funcion.create');
        
    }
}
