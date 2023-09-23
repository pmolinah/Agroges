<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cosecha;
use App\Models\empresa;
use App\Models\envase;
use App\Models\User;
use App\Models\planificacioncosecha;
use App\Models\exportadoraxplanificacion;
use Illuminate\Support\Facades\Session;
use App\Models\contraistaxplanificacion;

class CosechaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $expid=array();
    public $expki=array();
    public function index()
    {
        
        $user = auth()->User()->id;
        $planificaciones = planificacioncosecha::whereHas('cuartel', function ($query) use ($user) {
            // Filtra los cuarteles relacionados con el capataz en la variable $user
            $query->where('capataz_id', $user);
        })->get();

        dd($planificaciones);
        return view('Cosecha.index',compact('cosechas'));
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
        // DD($planificacioncosecha->id);
        $longitud = count($request->exportadora_id);
        //dd($longitud);
        for($i=0;$i<$longitud;$i++){
            exportadoraxplanificacion::create([
                'planificacioncosecha_id'=>$planificacioncosecha->id,
                'empresa_id'=>$request->exportadora_id[$i],
                'kilosSolicitados'=>$request->kilosexportadora[$i],
            ]);
        }

        $longitud=count($request->id);
        for($i=0;$i<$longitud;$i++){
            contraistaxplanificacion::create([
                'planificacioncosecha_id'=>$planificacioncosecha->id,
                'contratista_id'=>$request->id[$i],
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
           
            exportadoraxplanificacion::create([
                'planificacioncosecha_id'=>$request->planificacioncosecha_id,
                'empresa_id'=>$request->exportadora_id[$i],
                'kilosSolicitados'=>$request->kilosexportadora[$i],
            ]);
        }

        contraistaxplanificacion::where('planificacioncosecha_id',$request->planificacioncosecha_id)->delete();
        $longitud=count($request->id);
        for($i=0;$i<$longitud;$i++){
            contraistaxplanificacion::create([
                'planificacioncosecha_id'=>$request->planificacioncosecha_id,
                'contratista_id'=>$request->id[$i],
            ]);
        }
        Session::flash('success', 'Planificación Actualizada Correctamente...');
        return back();


    }



    public function create()
    {
        return view('Cosecha.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function EliminarPlanificacionCosecha($id){
        planificacioncosecha::where('id',$id)->delete();
        return 0;
    }
}
