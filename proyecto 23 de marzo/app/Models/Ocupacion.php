<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcion;

class Ocupacion extends Model
{
    use HasFactory;

    protected $table = 'ocupaciones';

    protected $fillable =[
        'nombre_ocupacion',
        

    ];

    public function cargo(){
        return $this->HasMany(Cargo::class, 'id_ocupacion', 'id');
    }


    public function funcion(){
        return $this->HasMany(Funcion::class, 'id_ocupacion', 'id');
    }
}
