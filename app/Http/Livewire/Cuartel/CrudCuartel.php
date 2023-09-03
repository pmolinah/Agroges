<?php

namespace App\Http\Livewire\Cuartel;

use Livewire\Component;
use App\Models\cuartel;

class CrudCuartel extends Component
{
    public $campo_id='';


    protected $listeners = ['selectedIdCampo'];

    public function selectedIdCampo($campo){
        $this->campo_id=$campo;
    }
    
    public function render()
    {
        $cuarteles=cuartel::where('campo_id',$this->campo_id)->get();
        return view('livewire.cuartel.crud-cuartel',compact('cuarteles'));
    }
}
