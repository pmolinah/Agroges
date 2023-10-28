<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guiarecepcion extends Model
{
    use HasFactory;
protected $fillable =[

];

public function guiarecepciondetalle(){
    return $this->hasMany(guiarecepciondetalle::class);
}

}
