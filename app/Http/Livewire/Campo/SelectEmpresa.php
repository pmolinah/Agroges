<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\empresa;

class SelectEmpresa extends Component
{
   
    public $selectedId = '';

    public function updatedSelectedId($value)
    {
        $this->emit('selectedIdUpdated', $value);
    }
    
    public function SelectEmpresa(){
        $this->emit('SelectEmpresaId',$this->selectedId);
    }


    public function render()
    {
        
        $contnomb=empresa::all();
        return view('livewire.campo.select-empresa',compact('contnomb'));
    }

      
}
