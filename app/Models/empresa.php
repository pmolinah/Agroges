<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'rut',
        'nombre',
        'razon_social',
        'direccion',
        'comuna_id',
        'telefono',
        'tipo_id',
        'email',
        'nombreContacto',
        'telefonoContacto',
        'emailContacto',
        'codigoproexp',
    ];

    public function campo(){
        return $this->hasMany(campo::class);
    }
    public function comuna(){
        return $this->belongsTo(comuna::class);
    }
}

