<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\campo;
use App\Models\comuna;
use App\Models\User;
class ListaCamposEdit extends Component
{
    public $selectedId = '';
    public $open=false;

    protected $listeners = ['selectedIdUpdated'];

    public function selectedIdUpdated($value)
    {
        $this->selectedId = $value;
    }
    
    public function render()
    {
        $campos=campo::with('cuartel')->where('empresa_id',$this->selectedId)->get();
        $comunas=comuna::all();
        $administradores=User::where('tipo_id','=',1)->get();
        $capataz=User::where('tipo_id','=',2)->get();
        return view('livewire.campo.lista-campos-edit',compact('campos','comunas','administradores','capataz'));
    }

    public function create(){

    }
}
