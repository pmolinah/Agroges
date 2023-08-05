<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\comuna;

class SelectComuna extends Component
{
    public $selectedId;
    public $comuna_id,$selectedOptionComuna;

   
   public function SelectComuna(){
        $this->emit('SelectComunaId',$this->selectedOptionComuna);
        
   }
    

 
    public function render()
    {
        $comuna=comuna::all();
        return view('livewire.campo.select-comuna',compact('comuna'));
    }
}
