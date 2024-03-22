<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{


    use HasFactory;

    protected $table = 'candidatos';

    protected $fillable = [
        'id_rol',
        'tipo_doc',
        'documento',
        'nombre_usuario',
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'contraseña',
    ];

    // Relación con el modelo de Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
