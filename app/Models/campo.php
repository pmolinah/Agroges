<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'campo',
        'direccion',
        'comuna_id',
        'adm_id',
        'capataz_id',
        'superficie',
        'empresa_id',
        'rut'
    ];
    public function empresa(){
        return $this->belongsTo(empresa::class);
    }

    public function cuartel(){
        return $this->hasMany(cuartel::class);
    }
}
