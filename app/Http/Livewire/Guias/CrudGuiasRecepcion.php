<?php

namespace App\Http\Livewire\Guias;

use Livewire\Component;
use App\Models\empresa;
use App\Models\campo;
use App\Models\envase;
use App\Models\color;
use App\Models\especie;
use App\Models\guiarecepcion;
use App\Models\observacion;
use App\Models\guiarecepciondetalle;
use Illuminate\Support\Facades\Session;
use Date;

class CrudGuiasRecepcion extends Component
{
    public $fechaGuia,$NombreCampo,$DireccionCampo,$campo_id,$exportadora_id,$Cantidad;
    public $rutExportadora,$razonSocialExportadora,$direccionExportadora,$comunaExportadora,$emailExportadora;
    public $especie_id,$observacion,$envase_id,$color_id,$kilos;
    public $guiarecepciondetalles=array();
    public $visible=false;
    public $NumGuiaRec;
    public $numeroGuiaRecepcion='0000000';
    public $matrizEspecieKilos=[];
    public $matrizEnvaseColor=[];
    public $matrizEnvaseColorResultado=[];
    public $envS;
    public $suma=0;
    public $guiaRepID;
    public $detS;
    public $conteo;
    public $i=0,$j=0;
    public $matEnvCol=array();
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
    
    public function AgregarGuiaRecepcion(){

        $this->matrizEnvaseColor=[];
        $this->matrizEspecieKilos=[];
        $conteo=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->count();    
        if($conteo>0){
            $guia=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
            foreach($guia as $guiaNum){
                $this->numeroGuiaRecepcion=$guiaNum->numero;
                $this->NumGuiaRec=$guiaNum->id;
                $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
                $this->visible=true;
            }  
        }else{
            $guiaRecepcion=guiarecepcion::create([
                'campo_id'=>$this->campo_id,
                'empresa_id'=>$this->exportadora_id,
                'numero'=>0,
                'fecha'=>$this->fechaGuia,
            ]);
            $guiaRecepcion->update(['numero'=>$guiaRecepcion->id+1000]);
            $this->numeroGuiaRecepcion=$guiaRecepcion->id+1000;
            $this->NumGuiaRec=$guiaRecepcion->id;
            $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
            $this->visible=true;
        }
        
        $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
        foreach($this->guiarecepciondetalles as $GuiaID){
            $this->guiaRepID=$GuiaID->id;
        }
        //cuenta de envases por color
        $envases=envase::all();
        foreach($envases as $envase){
            $colores=color::all();
                foreach($colores as $color){
                    $detalleGuiaRecepcion=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->count();
                    if($detalleGuiaRecepcion>0){
                        $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->sum('cantidadEnvase');
                        $this->matrizEnvaseColor[$this->i][$this->j]=$envase->envase;
                        $this->matrizEnvaseColor[$this->i][$this->j+1]=$color->color;
                        $this->matrizEnvaseColor[$this->i][$this->j+2]=$suma;
                    }
                    $this->i++;
                }
        }
        //cuenta de frutas por especie
        $especies=especie::all();
        foreach($especies as $especie){
            $observaciones=observacion::all();
                foreach($observaciones as $observacion){
                    $detalleGuiaRecepcionEspecie=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->count();
                    if($detalleGuiaRecepcionEspecie>0){
                        $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->sum('kilos');
                        if($especie->especie!='N/A' || $observacion->observacion!='Vacio'){
                            $this->matrizEspecieKilos[$this->i][$this->j]=$especie->especie;
                            $this->matrizEspecieKilos[$this->i][$this->j+1]=$observacion->observacion;
                            $this->matrizEspecieKilos[$this->i][$this->j+2]=$suma;
                        }
                    }
                    $this->i++;
                }
        }
                    
                      


       

    }

    public function AgregarLinea(){
        $this->matrizEnvaseColor=[];
        $this->matrizEspecieKilos=[];
        $guardarLinea=guiarecepciondetalle::create([
            'guiarecepcion_id'=>$this->NumGuiaRec,
            'cantidadEnvase'=>$this->Cantidad,
            'envase_id'=>$this->envase_id,
            'color_id'=>$this->color_id,
            'observacion_id'=>$this->observacion,
            'especie_id'=>$this->especie_id,
            'kilos'=>$this->kilos,
        ]);
        $this->reset(['Cantidad','envase_id','color_id','observacion','especie_id','kilos']);
        //resumen de envases por color
        $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
        foreach($this->guiarecepciondetalles as $GuiaID){
            $this->guiaRepID=$GuiaID->id;
        }
        $envases=envase::all();
        foreach($envases as $envase){
            $colores=color::all();
                foreach($colores as $color){
                    $detalleGuiaRecepcion=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->count();
                    if($detalleGuiaRecepcion>0){
                        $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->sum('cantidadEnvase');
                    
                            $this->matrizEnvaseColor[$this->i][$this->j]=$envase->envase;
                            $this->matrizEnvaseColor[$this->i][$this->j+1]=$color->color;
                            $this->matrizEnvaseColor[$this->i][$this->j+2]=$suma;
                      
                    }
                    $this->i++;
                }
        }
       //fin resumen envases por color
         //cuenta de frutas por especie
         $especies=especie::all();
         foreach($especies as $especie){
             $observaciones=observacion::all();
                 foreach($observaciones as $observacion){
                     $detalleGuiaRecepcionEspecie=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->count();
                     if($detalleGuiaRecepcionEspecie>0){
                         $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->sum('kilos');
                         if($especie->especie!='N/A' || $observacion->observacion!='Vacio'){
                            $this->matrizEspecieKilos[$this->i][$this->j]=$especie->especie;
                            $this->matrizEspecieKilos[$this->i][$this->j+1]=$observacion->observacion;
                            $this->matrizEspecieKilos[$this->i][$this->j+2]=$suma;
                         }
                     }
                     $this->i++;
                 }
         }
        // fin de resumenes
    }

    public function QuitarLinea($id){
        $this->matrizEnvaseColor=[];
        $this->matrizEspecieKilos=[];
        guiarecepciondetalle::where('id',$id)->delete();
        $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
         //resumen de envases por color
         $this->guiarecepciondetalles=guiarecepcion::with('guiarecepciondetalle')->where('campo_id',$this->campo_id)->where('empresa_id',$this->exportadora_id)->where('emitida',NULL)->where('fecha',$this->fechaGuia)->get();
         foreach($this->guiarecepciondetalles as $GuiaID){
             $this->guiaRepID=$GuiaID->id;
         }
         $envases=envase::all();
         foreach($envases as $envase){
             $colores=color::all();
                 foreach($colores as $color){
                     $detalleGuiaRecepcion=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->count();
                     if($detalleGuiaRecepcion>0){
                         $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('envase_id',$envase->id)->where('color_id',$color->id)->sum('cantidadEnvase');
                     
                             $this->matrizEnvaseColor[$this->i][$this->j]=$envase->envase;
                             $this->matrizEnvaseColor[$this->i][$this->j+1]=$color->color;
                             $this->matrizEnvaseColor[$this->i][$this->j+2]=$suma;
                       
                     }
                     $this->i++;
                 }
         }
        //fin resumen envases por color
          //cuenta de frutas por especie
          $especies=especie::all();
          foreach($especies as $especie){
              $observaciones=observacion::all();
                  foreach($observaciones as $observacion){
                      $detalleGuiaRecepcionEspecie=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->count();
                      if($detalleGuiaRecepcionEspecie>0){
                          $suma=guiarecepciondetalle::where('guiarecepcion_id',$this->guiaRepID)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->sum('kilos');
                          if($especie->especie!='N/A' || $observacion->observacion!='Vacio'){
                             $this->matrizEspecieKilos[$this->i][$this->j]=$especie->especie;
                             $this->matrizEspecieKilos[$this->i][$this->j+1]=$observacion->observacion;
                             $this->matrizEspecieKilos[$this->i][$this->j+2]=$suma;
                          }
                      }
                      $this->i++;
                  }
          }
         // fin de resumenes
    }

    public function render()
    {
      
        $empresas=empresa::where('tipo_id',1)->get();
        $exportadoras=empresa::where('tipo_id',4)->get();
        $campos=campo::all();
        $envases=envase::all();
        $colores=color::all();
        $especies=especie::all();
        $observaciones=observacion::all();
        return view('livewire.guias.crud-guias-recepcion',compact('empresas','exportadoras','campos','envases','colores','especies','observaciones'));
    }
}
