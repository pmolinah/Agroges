<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\campo;

class ListaCamposEdit extends Component
{
    public $selectedId = '';

    protected $listeners = ['selectedIdUpdated'];

    public function selectedIdUpdated($value)
    {
        $this->selectedId = $value;
    }
    
    public function render()
    {
        $campos=campo::where('empresa_id',$this->selectedId)->get();
        return view('livewire.campo.lista-campos-edit',compact('campos'));
    }
}
