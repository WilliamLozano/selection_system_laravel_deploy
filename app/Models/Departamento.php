<?php

namespace App\Models;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departamento extends Model
{
    use HasFactory;

    protected $table ='departaments';

    protected $fillable =[
        'nombre_departamento'
    ];


    public function municipio(){
        return $this->hasMany(Municipio::class, 'id_departamento','id');
    }

}
