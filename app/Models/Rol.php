<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'nombre',
    ];

    // Relación con el modelo de Candidato
    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'id_rol');
    }
}
