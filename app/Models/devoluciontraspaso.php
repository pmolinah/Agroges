<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devoluciontraspaso extends Model
{
    use HasFactory;

    protected $fillable = [
        'campo_id',
        'destino_id',
        'destino_type',
        'fecha',
        'conductor_id',
        'vehiculo_id',
        'tipo',
        'observacion',
        'numero',
        'emitida',
    ];

    public function campo()
    {
        return $this->belongsTo(campo::class);
    }
    public function destino()
    {
        return $this->morphTo('destino');
    }
    public function devoluciontraspasodetalle(){
        return $this->hasMany(devoluciontraspasodetalle::class);
    }



}
