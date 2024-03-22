<?php

namespace App\Http\Controllers;

use App\Models\Ocupacion;
use Illuminate\Http\Request;

class ApiOcupacionController extends Controller
{
    //


    //metodo para consultar los datos

    public function index(){

        $ocupaciones = Ocupacion::all();

        return response()->json($ocupaciones, 200);
    }




//metodo para insertar datos  a la tabla deseada(ocupacion) validando datos
    public function store(Request $request){

        $request->validate([
            'nombre_ocupacion'=>'required',

        ]);

        $ocupacion =Ocupacion::create($request->all());


        return response()->json($ocupacion, 201);
    }



    //metodo para consulatar usando el id del dato en especifico
    //el metodo where se usa para facilitar la consulta segun el id
    public function getById($id){
        $ocupacion = ocupacion::where('id', $id)->first();
        if (empty($ocupacion)){
            return response()->json(['message' => 'ocupacion no encontrado'], 404);
        }
        return response()->json($ocupacion, 200);
    }
}
