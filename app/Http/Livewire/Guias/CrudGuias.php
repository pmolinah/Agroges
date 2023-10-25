<?php

namespace App\Http\Livewire\Guias;

use Livewire\Component;
use App\Models\guia;
use App\Models\planificacioncosecha;
use App\Models\exportadoraxplanificacion;
use App\Models\detallecosecha;

class CrudGuias extends Component
{
    public $guias;
    public $fechainicial;
    public $fechafinal;
    public $cosechasCerradas=array();
    public $exportadorxplanificacionID;
    public $exportadoraxplanificacion=array();
    public $detalleCosecha=array();
    public $visible=false;

    public function CargarInformacion(){
        $this->exportadoraxplanificacion=exportadoraxplanificacion::with('desgloseenvase')->where('id',$this->exportadorxplanificacionID)->get();
        foreach($this->exportadoraxplanificacion as $expxcos){
            $this->detalleCosecha=detallecosecha::where('planificacioncosecha_id',$expxcos->planificacioncosecha_id)->where('exportadora_id',$expxcos->empresa_id)->get();
        }
        $this->visible=true;
    }

    public function generarGuia(){
        
    }

    public function render()
    {
    
        $planificacioncosecha=planificacioncosecha::with('exportadoraxplanificacion.desgloseenvase','contraistaxplanificacion','detallecosecha')->whereBetween('updated_at', [$this->fechainicial . ' 00:00:00', $this->fechafinal . ' 23:59:59'])->get();
            //whereRaw("DATE(updated_at) = ?", [$this->fechainicial])->get();
        
        return view('livewire.guias.crud-guias',compact('planificacioncosecha'));
    }
}
