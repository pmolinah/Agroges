<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guia extends Model
{
    use HasFactory;

    protected $fillable = [
        'planificacioncosecha_id',
        'empresa_id',
        'numero',
        'tipo',
        'cantidadKilos',
        'cantidadEnvases',
        'fecha',
        'observacion',
        'envase_id',
    ];

    public function empresa(){
        return $this->belongsTo(empresa::class);
    }
    public function planificacioncosecha(){
        return $this->belongsTo(planificacioncosecha::class);
    }
    public function envase(){
        return $this->belongsTo(envase::class);
    }
}
