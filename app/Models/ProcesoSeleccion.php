<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcesoSeleccion extends Model
{
    protected $table = 'proceso_seleccion';

    protected $fillable = ['candidato_id', 'etapa_id', 'resultado'];

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }

    public function etapaProceso()
    {
        return $this->belongsTo(EtapaProceso::class, 'etapa_id');
    }

    public function resultadoProceso()
    {
        return $this->hasOne(ResultadoProceso::class, 'proceso_seleccion_id');
    }
}
