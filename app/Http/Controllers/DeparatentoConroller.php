<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeparatentoConroller extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
        return view('empresa.create');
    }

    public function store(Request $request)
    {
        //
        Empresa::create([
        'nombre_empresa'=>$request->nombre_empresa,
        'direccion'=>$request->direccion,
        'id_municipio'=>$request->id_municipio
        ]);

        return redirect()->back()->with('succes','empresa creada');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
