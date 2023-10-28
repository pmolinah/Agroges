<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guiarecepciondetalle extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function guiarecepcion(){
        return $this->belongsTo(guiarecepcion::class);
    }
}
