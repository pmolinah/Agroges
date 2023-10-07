<?php

namespace App\Http\Livewire\Campo;

use Livewire\Component;
use App\Models\comuna;
use App\Models\User;
use App\Models\campo;
use App\Models\empresa;
use App\Models\envase;
use Illuminate\Support\Facades\Session;

class CreateCampoCuartel extends Component
{
    public $selectedId;
    public $campo,$direccion,$comuna_id,$superficie,$administrador_id,$capataz_id,$rut;
    public $cuarteles=array();
    public $campos=array();
    public $empresaID,$empresa_id,$campo_id;
    public $tab1='tabs-home';
    public $tab2='';

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

    public function SeleccionEmpresa(){
        
        $this->campos=campo::where('empresa_id',$this->empresaID)->get();
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
        $this->reset(['direccion','superficie','rut','campo']);
              // $this->comuna_id = "";

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Item has been removed.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);

        $this->dispatchBrowserEvent('LimpiarComuna');
        $this->emit('selectedIdUpdated',$this->selectedId);
    }
    
    public function render()
    {
        $comuna=comuna::all();
        $administradores=User::where('tipo_id','=',1)->get();
        $capataz=User::where('tipo_id','=',2)->get();
        $empresas=empresa::where('tipo_id',1)->get();
        $envases=envase::all();
        return view('livewire.campo.create-campo-cuartel',compact('comuna','administradores','capataz','empresas','envases'));
    }
}
