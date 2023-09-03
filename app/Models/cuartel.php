<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuartel extends Model
{
    use HasFactory;

    public function campo(){
        return $this->belongsTo(campo::class);
    }

    public function plantacion(){
        return $this->belongsTo(plantacion::class);
    }

    public function capataz(){
        return $this->belongsTo(User::class);
    }
}
