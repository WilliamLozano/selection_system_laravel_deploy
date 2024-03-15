<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipio extends Model
{
    use HasFactory;
    protected $table ='municipalities';

    protected $fillable =[
        'nombre_municipio',
        'id_departamento'
    ];

    public function vacante(){
        return $this->HasMany(vacante::class, 'id_municipio', 'id');
    }
    public function empresa(){
        return $this->HasMany(Empresa::class, 'id_municipio', 'id');
    }

    public function departamento(){
        return $this->belongsto(Departamento::class, 'id_departamento', 'id');
    }


}
