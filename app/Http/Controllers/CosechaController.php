<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cosecha;
use App\Models\empresa;
use App\Models\envase;
use App\Models\User;
use App\Models\planificacioncosecha;
use App\Models\cuentaenvase;
use App\Models\envaseempresa;
use App\Models\exportadoraxplanificacion;
use Illuminate\Support\Facades\Session;
use App\Models\contraistaxplanificacion;
use App\Http\Livewire\Cosecha\Cosechar;

class CosechaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $expid=array();
    public $expki=array();
    public $saldoCapacidad=array();
    public $planificacioncosecha_id;
    public $cuenEnv;
    public function index()
    {
        
        // $planificaciones = planificacioncosecha::whereHas('cuartel', function ($query) use ($user) {
            //     $query->where('capataz_id', $user);
            // })->where('planificacioncosecha.finalizada', '<>', 1)->get();
        $user = auth()->User()->id;
        $planificaciones = planificacioncosecha::whereHas('cuartel', function ($query) use ($user) {
            $query->where('capataz_id', $user);
        })->where('finalizada', '=', NULL)->get();
       
        
        return view('Cosecha.index',compact('planificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function planificacion(){
        $planificacioncosechas=planificacioncosecha::with('contraistaxplanificacion')->get();

        
    
        return view('Cosecha.planificacionIndex',compact('planificacioncosechas'));
    }

    public function planificacionCreate(){
        $empresas=empresa::all();
        $usuarios=User::all();
        $envases=envase::all();
        return view('Cosecha.planificacionCreate', compact('empresas','usuarios','envases'));
    }

    public function planificacionStore(Request $request){
        // dd($request);

        $planificacioncosecha=planificacioncosecha::create([
            'fechai'=>$request->fechai,
            'fechaf'=>$request->fechaf,
            'cuartel_id'=>$request->cuartel_id,
            'envase_id'=>$request->envase_id,
            'kilos'=>$request->totalkilos,
            'plantacion_id'=>$request->plantacion_id,
        ]);
       
        $longitud = count($request->exportadora_id);
        //dd($request);
        for($i=0;$i<$longitud;$i++){
            //dd($request->envase_id);
            $cuentaEmpresa=cuentaenvase::where('empresa_id',$request->exportadora_id[$i])->where('envase_id',$request->envase_id)->get();
            if ($cuentaEmpresa->isEmpty())
            {
                $this->cuenEnv=0;
            }else{
                foreach($cuentaEmpresa as $cuentaEnvEmp){
                    $this->cuenEnv=$cuentaEnvEmp->id;
                }
            }
           
                //dd($this->cuenEnv);
                 exportadoraxplanificacion::create([
                'planificacioncosecha_id'=>$planificacioncosecha->id,
                'empresa_id'=>$request->exportadora_id[$i],
                'kilosSolicitados'=>$request->kilosexportadora[$i],
                'cuentaenvase_id'=>$this->cuenEnv,
                ]);
        };
    

        $longitud=count($request->id);
        for($i=0;$i<$longitud;$i++){
            contraistaxplanificacion::create([
                'planificacioncosecha_id'=>$planificacioncosecha->id,
                'contratista_id'=>$request->id[$i],
                'tratoxcosecha'=>$request->tratoxcosecha[$i],
            ]);
        }

        Session::flash('success', 'Planificación Guardada Correctamente...');
        return back();
    }

    public function planificacionEdit($id){
        $empresas=empresa::all();
        $usuarios=User::all();
        $envases=envase::all();
        $planificacioncosecha=planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion')->where('id',$id)->get();
        return view('Cosecha.planificacionEdit', compact('empresas','usuarios','envases','planificacioncosecha'));
    }

    public function planificacionUpdate(Request $request){
        //dd($request);

        planificacioncosecha::where('id',$request->planificacioncosecha_id)->update(['fechai'=>$request->fechai,'fechaf'=>$request->fechaf,'envase_id'=>$request->envase_id,'kilos'=>$request->totalkilos]);
        exportadoraxplanificacion::where('planificacioncosecha_id',$request->planificacioncosecha_id)->delete();
        
        $longitud = count($request->exportadora_id);

        for($i=0;$i<$longitud;$i++){

            $cuentaEmpresa=cuentaenvase::where('empresa_id',$request->exportadora_id[$i])->where('envase_id',$request->envase_id)->get();
            if ($cuentaEmpresa->isEmpty())
            {
                $this->cuenEnv=0;
            }else{
                foreach($cuentaEmpresa as $cuentaEnvEmp){
                    $this->cuenEnv=$cuentaEnvEmp->id;
                }
            }
           
            exportadoraxplanificacion::create([
                'planificacioncosecha_id'=>$request->planificacioncosecha_id,
                'empresa_id'=>$request->exportadora_id[$i],
                'kilosSolicitados'=>$request->kilosexportadora[$i],
                'cuentaenvase_id'=>$this->cuenEnv,
            ]);
        }

        contraistaxplanificacion::where('planificacioncosecha_id',$request->planificacioncosecha_id)->delete();
        $longitud=count($request->id);
        for($i=0;$i<$longitud;$i++){
            contraistaxplanificacion::create([
                'planificacioncosecha_id'=>$request->planificacioncosecha_id,
                'contratista_id'=>$request->id[$i],
                'tratoxcosecha'=>$request->tratoxcosecha[$i],
            ]);
        }
        Session::flash('success', 'Planificación Actualizada Correctamente...');
        return back();


    }

    public function create()
    {
        return view('Cosecha.create');
    }

    public function cosechar($id){
       
        $planificacioncosecha_id=$id;
        return view('Cosecha.cosechar',compact('planificacioncosecha_id'));
    }
    /**
     * Store a newly created resource in storage.
     */
   public function StockEnvaseEmpresa($caID,$enID){
        return envaseempresa::where('campo_id',$caID)->where('envase_id',$enID)->get();
   }

   public function StockEnvaseExportadora($exID,$enID){
        $cee=cuentaenvase::where('empresa_id',$exID)->where('envase_id',$enID)->get();
        foreach($cee as $cc){
            $this->saldoCapacidad[0]=$cc->saldo;
            $this->saldoCapacidad[1]=$cc->envase->capacidad;
            return $this->saldoCapacidad;
        }
        
   }

    public function EliminarPlanificacionCosecha($id){
        planificacioncosecha::where('id',$id)->delete();
        return 0;
    }

    public function CosechaStore(Request $request){
        //dd($request);
        planificacioncosecha::where('id',$request->planificacionCosecha_id)->update(['finalizada'=>1,'kilosRealesCosechados'=>$request->cosechaActual]);
        $num=count($request->exportadora_id);
        //dd($num);
        for($i=0;$i<$num;$i++){
            //dd($request->exportadora_id[$i]);
            exportadoraxplanificacion::where('id',$request->exportadora_id[$i])->update(['KilosRecolectados'=>$request->valores[$i],'envasesUtilizadosReales'=>$request->bines[$i]]);
        };
        $user = auth()->User()->id;
        $planificaciones = planificacioncosecha::whereHas('cuartel', function ($query) use ($user) {
            $query->where('capataz_id', $user);
        })->where('finalizada', '=', NULL)->get();
        Session::flash('success', 'Cosecha Cerrada Correctamente...');
        return view('Cosecha.index',compact('planificaciones'));
    }

    public function indexCosechasCerradas(){
        
        $planificaciones = planificacioncosecha::with('exportadoraxplanificacion','contraistaxplanificacion')->where('finalizada', '=', 1)->get();
        return view('CosechasCerradas.index',compact('planificaciones'));
    }
}
