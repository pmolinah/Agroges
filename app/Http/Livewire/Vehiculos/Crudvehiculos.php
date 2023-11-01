<?php

namespace App\Http\Livewire\Vehiculos;

use Livewire\Component;
use App\Models\vehiculo;
use App\Models\User;
use App\Models\empresa;

class Crudvehiculos extends Component
{
    
    public $vehiculos=array();
    
    public function render()
    {
        $conductores=User::where('tipo_id',6)->get();
        $vehiculos=vehiculo::all();
        $empresas=empresa::all();
        return view('livewire.vehiculos.crudvehiculos',compact('vehiculos','conductores','empresas'));
    }
}
