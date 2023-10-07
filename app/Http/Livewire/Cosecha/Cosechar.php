<?php

namespace App\Http\Livewire\Cosecha;

use Livewire\Component;
use App\Models\planificacioncosecha;
use App\Models\detallecosecha;
use App\Models\contraistaxplanificacion;
use Livewire\WithPagination;

class Cosechar extends Component
{
    public $planificacioncosecha_id;
    public $contratista_id;
    public $cosechaActual;
    public $kilosActuales;
    public $kilos;
    public $resta;
    public $suma,$multi;
    public $tarjaenvase;
    public $totalcosto;
    public $cosechaFinal;
    public $valores=[];
    public $expKilosFinal=[];
    
   

    use WithPagination;

    // public function mount()
    // {
    //     // Puedes inicializar la variable aquí si es necesario
    //     $this->valores = [];
    //     // $this->listeners += ['cierreCosecha'];
    // }
    
    public function agregarKilos(){
        detallecosecha::create([
            'planificacioncosecha_id'=>$this->planificacioncosecha_id,
            'empresa_id'=>$this->contratista_id,
            'tarjaenvase'=>$this->tarjaenvase,
            'kilos'=>$this->kilos,
        ]);

        $sumarKilos=contraistaxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('contratista_id',$this->contratista_id)->get();
        foreach($sumarKilos as $sumar){
             $this->suma = $sumar->kilos + $this->kilos;
             $multi = $sumar->tratoxcosecha * $this->suma;
             contraistaxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('contratista_id',$this->contratista_id)->update(['kilos'=>$this->suma,'costototal'=>$multi]);
        }



        $valor=$this->planificacioncosecha_id;
        $planificacion=planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion','detallecosecha')->where('id',$this->planificacioncosecha_id)->get();
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$valor)->paginate(10);
        $resultado = detallecosecha::where('planificacioncosecha_id', $this->planificacioncosecha_id)->sum('kilos');
        $this->cosechaActual=$resultado;
        $this->cosechaFinal=$resultado;
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$this->planificacioncosecha_id)->paginate(5);
        foreach($planificacion as $pla){
            if ($this->cosechaActual>$pla->kilos){
                $this->dispatchBrowserEvent('KilosCompletados', [
                    'title' => 'Kilos Solicitados Completados.',
                    'icon'=>'success',
                    'iconColor'=>'blue',
                ]);
            }

        }


    }

    public function ElimnarRegistro($detalle_id){
        
        $lineaBorrar=detallecosecha::where('id',$detalle_id)->get();
        foreach($lineaBorrar as $lineaDetalle){
            $contratistaxplanificacion=contraistaxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('contratista_id',$lineaDetalle->empresa_id)->get();
            foreach($contratistaxplanificacion as $contratistaPlanificacion){
                $this->resta=$contratistaPlanificacion->kilos - $lineaDetalle->kilos;
                $this->multi=$this->resta * $contratistaPlanificacion->tratoxcosecha;
                $contratistaxplanificacion=contraistaxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('contratista_id',$lineaDetalle->empresa_id)->update(['kilos'=>$this->resta,'costototal'=>$this->multi]);
                detallecosecha::where('id',$detalle_id)->delete();
            };
        };
       
        $planificacion=planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion','detallecosecha')->where('id',$this->planificacioncosecha_id)->get();
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$this->planificacioncosecha_id)->paginate(10);
        $resultado = detallecosecha::where('planificacioncosecha_id', $this->planificacioncosecha_id)->sum('kilos');
        $this->cosechaActual=$resultado;
        $this->cosechaFinal=$resultado;
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$this->planificacioncosecha_id)->paginate(5);
        foreach($planificacion as $pla){
            if ($this->cosechaActual>$pla->kilos){
                $this->dispatchBrowserEvent('KilosCompletados', [
                    'title' => 'Kilos Solicitados Completados.',
                    'icon'=>'success',
                    'iconColor'=>'blue',
                ]);
            }

        }

        
    }
   

    public function cierreCosecha(){

        $this->largo = count($this->valores[0]);
        dd($this->largo);



        $this->dispatchBrowserEvent('cierreCosechas', [
            'title' => 'Kilos Solicitados Completados.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);
    }

    public function render()
    {
        
        $valor=$this->planificacioncosecha_id;
        $planificacion=planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion','detallecosecha')->where('id',$valor)->get();
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$valor)->paginate(10);
        $resultado = detallecosecha::where('planificacioncosecha_id', $this->planificacioncosecha_id)->sum('kilos');
        $this->cosechaActual=$resultado;
        $this->cosechaFinal=$resultado;
        return view('livewire.cosecha.cosechar',compact('planificacion','detalleCo'));
    }
}
