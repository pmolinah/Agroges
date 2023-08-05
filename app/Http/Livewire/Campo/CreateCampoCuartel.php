<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\comuna;
use App\Models\User;
use App\Models\campo;
use Illuminate\Support\Facades\Session;

class CreateCampoCuartel extends Component
{
    public $selectedId;
    public $campo,$direccion,$comuna_id,$superficie,$administrador_id,$capataz_id,$rut;
  

   protected $listeners=['SelectComunaId','SelectAdminId','SelectCapatazId','SelectEmpresaId'];

   public function SelectComunaId($SelectCamunaId){
        $this->comuna_id=$SelectCamunaId;
   }

  
   public function SelectAdminId($SelectAdminId){
        $this->administrador_id=$SelectAdminId;
   }

   public function SelectCapatazId($SelectCapatazId){
        $this->capataz_id=$SelectCapatazId;
   }

   public function SelectEmpresaId($selectEmpresaId){
    $this->selectedId=$selectEmpresaId;
   }

   

    public function save(){
        campo::create([
            'campo'=>$this->campo,
            'direccion'=>$this->direccion,
            'comuna_id'=>$this->comuna_id,
            'superficie'=>$this->superficie,
            'adm_id'=>$this->administrador_id,
            'capataz_id'=>$this->capataz_id,
            'empresa_id'=>$this->selectedId,
            'rut'=>$this->rut,
        ]);
        //$this->reset(['selectedId','direccion','comuna_id','superficie','administrador_id','capataz_id','rut','campo']);
      
        Session::flash('success', 'Empresa Guardada Correctamente...');
        // $this->emit('selectedIdUpdated',$this->selectedId,)
        // $this->emit('render');
        // $this->emit('alert');
       
        // Session::flash('success', 'Empresa Actualizado Correctamente...');
        // Session::flash('success', 'Campo Guardado Correctamente');
   
    }
    
    public function render()
    {
        $comuna=comuna::all();
        $administradores=User::where('tipo_id','=',1)->get();
        $capataz=User::where('tipo_id','=',2)->get();
        return view('livewire.campo.create-campo-cuartel',compact('comuna','administradores','capataz'));
    }
}
