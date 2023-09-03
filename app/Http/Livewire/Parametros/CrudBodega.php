<?php

namespace App\Http\Livewire\Parametros;
use Livewire\Component;
use App\Models\variedad;
use App\Models\envase;
use Livewire\WithPagination;
use App\Models\bodega;
use App\Models\empresa;
use App\Models\User;
class CrudBodega extends Component
{
    use WithPagination;
    
    public $bodega,$campoxbodega,$campo_id,$encargado_id,$observacion,$bodegaEditar,$edit_id;
    public $campoBodega=array();
    public $encargado=array();
    public $open_editBodega=false;
    public $search;

    protected $rules=[
        'variedad.variedad'=>'required',
        'variedad.observacion'=>'required',
    ];

    public function Limpiar(){
        $this->reset(['bodega','observacion']);
        $this->open_editBodega=false;
    }
    
    public function GuardarBodega(){
        // $this->validate();
        bodega::create([
            'bodega'=>$this->bodega,
            'campo_id'=>$this->campo_id,
            'encargado_id'=>$this->encargado_id,
            'observacion'=>$this->observacion,
        ]);
        $this->reset(['bodega','observacion']);

        $this->dispatchBrowserEvent('Guardar', [
            'title' => 'Registro guardado correctamente.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);
    }

    public function EliminarBodega($id){
        bodega::where('id',$id)->delete();
        $this->dispatchBrowserEvent('Eliminar', [
            'title' => 'Registro Eliminado correctamente.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);
    }

    public function EditarBodega($bodega){

       
        $this->campoBodega=bodega::where('id',$bodega)->get();
        $this->encargado=User::where('tipo_id',5)->get();
        foreach($this->campoBodega as $this->campoxbodega)
        {
            $this->edit_idBodega=$this->campoxbodega->id;
            $this->bodega=$this->campoxbodega->bodega;
            $this->campo_id=$this->campoxbodega->campo->campo;
            $this->encargado_id=$this->campoxbodega->encargado_id;
            $this->observacion=$this->campoxbodega->observacion;
       
        }
        $this->open_editBodega=true;
    }

    public function ActualizarBodega(){
        bodega::where('id',$this->edit_idBodega)->update(['bodega'=>$this->bodega,'campo_id'=>$this->campo_id,'encargado_id'=>$this->encargado_id,'observacion'=>$this->observacion]);
        $this->open_ediBodega=false;
        $this->dispatchBrowserEvent('Actualizar', [
            'title' => 'Registro guardado correctamente.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);
        $this->reset(['bodega','observacion']);
    }
    
    public function render()
    {
        $bodegas=bodega::where('bodega','like','%'.$this->search.'%')->paginate(3);
        $encargado=User::where('tipo_id',5)->get();
        $empresas=empresa::where('tipo_id',1)->get();
        
        return view('livewire.parametros.crud-bodega',compact('bodegas','encargado','empresas'));
    }
}
