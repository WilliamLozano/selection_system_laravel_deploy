<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    protected $fillable =[
        'tipo_contrato'
    ];

    public function vacante(){
        return $this->HasMany(Vacante::class, 'id_contrato', 'id');
    }
}
