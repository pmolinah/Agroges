<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;

    protected $fillable=[
        'patente',
        'tipovehiculo_id',
        'empresa_id',
        'conductor_id',
        'color',
        'observacion',
        'marca',
        'anio',
    ];
}
