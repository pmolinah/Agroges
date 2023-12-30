<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalletarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarea_id',
        'item_id',
        'objetivo',
        'dosis',
        'fechai',
        'fechaf',
        'diasentreAplicacion',
        'fechasAplicacion',
        'reingreso',
        'mojamiento',
        'equipo_id',
        'carencia',
    ];
}
