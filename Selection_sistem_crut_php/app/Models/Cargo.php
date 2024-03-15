<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable =[

        'nombre_cargo',
        'descripcion',
        'codigo_ocupacion'
    ];

    public function competencia(){
        return $this->hasMany(Competencia::class, 'id_cargo', 'id');
    }


    public function vacante(){
        return $this->hasMany(Vacante::class, 'id_cargo', 'id');
    }

    public function ocupacion(){
        return $this->belongsto(cargo::class, 'codigo_ocupacion', 'id');
    }
}
