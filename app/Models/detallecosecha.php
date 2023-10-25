<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallecosecha extends Model
{
    use HasFactory;

    protected $fillable = [
        'planificacioncosecha_id',
        'empresa_id',
        'tarjaenvase',
        'kilos',
        'exportadora_id',
        'pivote',
    ];

    public function planificacioncosecha(){
        return $this->belongsTo(planificacioncosecha::class);
    }

    public function empresa(){
        return $this->belongsTo(empresa::class);
    }
    public function exportadora(){
        return $this->belongsTo(empresa::class);
    }
}
