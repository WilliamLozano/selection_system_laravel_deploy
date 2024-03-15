<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';

    protected $fillable = [
        'tipo_horario',
    ];

    public function vacante(){
        return $this->HasMany(Vacante::class, 'id_horario', 'id');
    }



}
