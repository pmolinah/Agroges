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
    ];

    public function planificacioncosecha(){
        return $this->belongsTo(planificacioncosecha::class);
    }
}
