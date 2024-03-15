<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;


class EmpresaController extends Controller
{
    public function create()
    {
        //
        return view('empresa.create');
    }

    public function index()
    {
        $empresas= Empresa::all();
        return view('empresa.index',['empresas'=>$empresas]);
    }






    public function store(Request $request)
    {
        //
        Empresa::create([
        'nombre_empresa'=>$request->nombre_empresa,
        'razon_social'=>$request->razon_social,
        'direccion'=>$request->direccion,
        'telefono'=>$request->telefono,
        'id_municipio'=>$request->id_municipio,
        ]);

        return redirect()->back()->with('succes','empresa creada');
    }



    public function show(Empresa $empresa)
    {
        //
        return view('empresa.show',['empresa'=>$empresa]);

    }



    public function edit($id)
    {
        //
        $empresa=Empresa::find($id);
        return view('empresa.edit',['empresa'=>$empresa]);
    }



    public function update(Request $request, Empresa $empresa)
    {
        //
        $empresa->update($request->all());
            return redirect()->route('empresa.index');

    }



    public function destroy(Request $request, Empresa $empresa)
    {
        //
        $empresa->delete();
        return redirect()->route('empresa.index');


    }
}
