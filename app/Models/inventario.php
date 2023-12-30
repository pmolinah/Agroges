<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'bodega_id',
        'cantidad',
        'contenido',
        'contenidoTotal',
        'utilizado',
        'presentacion',
        'precioUnitario',
        'stockMinimo',
        'pivote',
    ];

    public function bodega(){
        return $this->belongsTo(bodega::class);
    }
    public function item(){
        return $this->belongsTo(item::class);
    }
}