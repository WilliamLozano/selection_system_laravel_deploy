<?php

namespace App\Models;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable =[

        'nombre_empresa',
        'razon_social',
        'direccion',
        'telefono',
        'id_municipio',
        'user'
    ];



    public function municipio(){
        return $this->belongsTo(Municipio::class, 'id_municipio', 'id');
    }

    public function vacante(){
        return $this->hasMany(Vacante::class,'id_empresa', 'id' );
    }


}
