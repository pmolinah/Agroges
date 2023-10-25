<?php

namespace App\Http\Livewire\Cosecha;

use Livewire\Component;
use App\Models\planificacioncosecha;
use App\Models\detallecosecha;
use App\Models\contraistaxplanificacion;
use App\Models\exportadoraxplanificacion;
use App\Models\cuentaenvase;
use App\Models\desgloseenvase;
use App\Models\envaseempresa;
use App\Models\color;
use Livewire\WithPagination;

class Cosechar extends Component
{
    public $planificacioncosecha_id;
    public $contratista_id;
    public $exportadoraID;
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
    public $pivoteDetalleCosecha;
    public $exportadoraIDDetalle,$cantidadDetalle,$coloresDDetalle;
 
    use WithPagination;

    
    public function agregarKilos(){

        $this->pivoteDetalleCosecha=$this->planificacioncosecha_id.'-'.$this->contratista_id.'-'.$this->exportadoraID;
        detallecosecha::create([
            'planificacioncosecha_id'=>$this->planificacioncosecha_id,
            'empresa_id'=>$this->contratista_id,
            'tarjaenvase'=>$this->tarjaenvase,
            'kilos'=>$this->kilos,
            'exportadora_id'=>$this->exportadoraID,
            'pivote'=>$this->pivoteDetalleCosecha,
        ]);

        $exportadorKilosRecolectados=exportadoraxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('empresa_id',$this->exportadoraID)->get();
        foreach($exportadorKilosRecolectados as $exportadorKilos){
            $this->suma=$exportadorKilos->KilosRecolectados + $this->kilos;
            exportadoraxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('empresa_id',$this->exportadoraID)->update(['KilosRecolectados'=>$this->suma]);
        }



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

    public function agregarDetalleEnvase(){
        
      
            DesgloseEnvase::create([
                'planificacioncosecha_id' => $this->planificacioncosecha_id,
                'exportadoraxplanificacion_id' => $this->exportadoraIDDetalle,
                'color_id' => $this->coloresDDetalle,
                'stock' => $this->cantidadDetalle,
            ]);
     

        $exportadora=exportadoraxplanificacion::where('id',$this->exportadoraIDDetalle)->get();
     
         foreach($exportadora as $expoenvase){
             $this->suma=$expoenvase->envasesUtilizadosReales + $this->cantidadDetalle;
        }
        exportadoraxplanificacion::where('id',$this->exportadoraIDDetalle)->update(['envasesUtilizadosReales'=>$this->suma]);

        $valor=$this->planificacioncosecha_id;
        $planificacion=planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion','detallecosecha')->where('id',$this->planificacioncosecha_id)->get();
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$valor)->paginate(10);
        $resultado = detallecosecha::where('planificacioncosecha_id', $this->planificacioncosecha_id)->sum('kilos');
        $this->cosechaActual=$resultado;
        $this->cosechaFinal=$resultado;
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$this->planificacioncosecha_id)->paginate(5);
       
                 $this->dispatchBrowserEvent('sumaDetalleEnvases', [
                     'title' => 'Detalle de envase agregado.',
                     'icon'=>'success',
                     'iconColor'=>'blue',
                 ]);
           

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

            $exportadoraxplanificacion=exportadoraxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('empresa_id',$lineaDetalle->exportadora_id)->get();
            foreach($exportadoraxplanificacion as $exportadoraKilos){
                $this->resta = $exportadoraKilos->KilosRecolectados - $lineaDetalle->kilos;
                exportadoraxplanificacion::where('planificacioncosecha_id',$this->planificacioncosecha_id)->where('empresa_id',$lineaDetalle->exportadora_id)->update(['KilosRecolectados'=>$this->resta]);
            }
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

    public function ElimnarDetalleEnvase($desglose_id){
        $RestaDesglose=desgloseenvase::where('id',$desglose_id)->get();
        foreach($RestaDesglose as $exportadoraxplanificacion){
            $exportadoraxpla=exportadoraxplanificacion::where('id',$exportadoraxplanificacion->exportadoraxplanificacion_id)->get();
            foreach($exportadoraxpla as $exportadoraxpla){
                $this->resta = $exportadoraxpla->envasesUtilizadosReales - $exportadoraxplanificacion->stock;
                $exportadoraxpla=exportadoraxplanificacion::where('id',$exportadoraxplanificacion->exportadoraxplanificacion_id)->update(['envasesUtilizadosReales'=>$this->resta]);
            }
        }

        desgloseenvase::where('id',$desglose_id)->delete();
            $this->dispatchBrowserEvent('EliminacionDetalleEnvase', [
                'title' => 'Kilos Solicitados Completados.',
                'icon'=>'success',
                'iconColor'=>'blue',
            ]);
        
    }
   

    public function cierreCosecha(){

        $this->largo = count($this->valores[0]);
       
        $this->dispatchBrowserEvent('cierreCosechas', [
            'title' => 'Kilos Solicitados Completados.',
            'icon'=>'success',
            'iconColor'=>'blue',
        ]);
    }

    public function render()
    {
        
        $valor=$this->planificacioncosecha_id;
        $planificacion=planificacioncosecha::with('exportadoraxplanificacion.desgloseenvase','contraistaxplanificacion','detallecosecha')->where('id',$valor)->get();
    
        $colores=color::all();

        // $planificacion=desgloseenvase::whereHas('cuentaenvase.exportadoraxplanificacion.planificacioncosecha', function ($query) use ($valor) 
        //     {$query->where('id', $valor);})->get();
        
        $detalleCo=detallecosecha::where('planificacioncosecha_id',$valor)->paginate(10);
        $resultado = detallecosecha::where('planificacioncosecha_id', $this->planificacioncosecha_id)->sum('kilos');

        $this->cosechaActual=$resultado;
        $this->cosechaFinal=$resultado;
        return view('livewire.cosecha.cosechar',compact('planificacion','detalleCo','colores'));
    }
}
