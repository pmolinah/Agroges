<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentaenvase extends Model
{
    use HasFactory;

    protected $fillable=[
        'empresa_id',
        'envase_id',
        'observacion',
        'saldo',
    ];

    public function empresa(){
        return $this->belongsTo(empresa::class);
    }

    public function envase(){
        return $this->belongsTo(envase::class);
    }
}
