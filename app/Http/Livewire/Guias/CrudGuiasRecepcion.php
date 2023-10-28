<?php

namespace App\Http\Livewire\Guias;

use Livewire\Component;
use App\Models\empresa;
use App\Models\campo;
use App\Models\envase;
use App\Models\color;
use App\Models\especie;
use App\Models\guiarecepcion;
use App\Models\guiarecepciondetalle;
use Date;

class CrudGuiasRecepcion extends Component
{
    public $fechaGuia,$NombreCampo,$DireccionCampo,$campo_id,$exportadora_id;
    public $rutExportadora,$razonSocialExportadora,$direccionExportadora,$comunaExportadora,$emailExportadora;
    public $guiarecepciondetalles=array();

    
    public function SeleccionCampo_id(){
        $datoCampo=campo::where('id',$this->campo_id)->get();
        foreach($datoCampo as $campo){
            $this->NombreCampo=$campo->campo;
            $this->DireccionCampo=$campo->direccion;
        }
    }

    public function SeleccionExportadora_id(){
        $datoExportadora=empresa::where('id',$this->exportadora_id)->get();
        foreach($datoExportadora as $exportadora){
            $this->rutExportadora=$exportadora->rut;
            $this->razonSocialExportadora=$exportadora->razon_social;
            $this->direccionExportadora=$exportadora->direccion;
            $this->comunaExportadora=$exportadora->comuna->comuna;
            $this->emailExportadora=$exportadora->email;
        }

        $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->get();
        
    }

    public function render()
    {
      
        $empresas=empresa::where('tipo_id',1)->get();
        $exportadoras=empresa::where('tipo_id',4)->get();
        $campos=campo::all();
        $envases=envase::all();
        $colores=color::all();
        $especies=especie::all();
        return view('livewire.guias.crud-guias-recepcion',compact('empresas','exportadoras','campos','envases','colores','especies'));
    }
}
