<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected  $table= 'vacantes';

    protected $fillable =[

        'numero_vacante',
        'meses_experiencia',
        'id_empresa',
        'pais',
        'salario',
        'fecha_inicio',
        'fecha_cierre',
        'id_municipio',
        'id_horario',
        'id_salario',
        'id_contrato',
        'id_cargo'






    ];

    public function municipio(){
        return $this->belongsto(Municipio::class, 'id_municipio', 'id');
    }

    public function horario(){
        return $this->belongsto(Horario::class, 'id_horario', 'id');
    }

    public function salario(){
        return $this->belongsto(Salario::class, 'id_salario', 'id');
    }



    public function contrato(){
        return $this->belongsto(Contrato::class, 'id_contrato', 'id');
    }

    

    public function cargo(){
        return $this->belongsto(Cargo::class, 'id_cargo', 'id');
    }

    public function empresa(){
        return $this->belongsto(Empresa::class, 'id_empresa', 'id');
    }

    

    


}