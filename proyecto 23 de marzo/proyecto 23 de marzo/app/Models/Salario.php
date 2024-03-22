<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    use HasFactory;

    protected $table = 'salarios';

    protected $fillable =[
        'tipo_salario'
    ];

    public function vacante(){
        return $this->HasMany(Vacante::class, 'id_salario', 'id');
    }


}
