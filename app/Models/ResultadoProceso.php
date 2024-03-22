<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoProceso extends Model
{
    protected $table = 'resultados_proceso';

    protected $fillable = ['proceso_seleccion_id', 'etapa_proceso_id', 'resultado'];

    public function procesoSeleccion()
    {
        return $this->belongsTo(ProcesoSeleccion::class);
    }

    public function etapaProceso()
    {
        return $this->belongsTo(EtapaProceso::class);
    }
}
