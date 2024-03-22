<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtapaProceso extends Model
{
    protected $table = 'etapas_proceso';

    protected $fillable = ['nombre'];

    public function procesosSeleccion()
    {
        return $this->hasMany(ProcesoSeleccion::class, 'etapa_id');
    }
}
