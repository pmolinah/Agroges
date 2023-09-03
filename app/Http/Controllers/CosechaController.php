<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cosecha;
use App\Models\empresa;
use App\Models\envase;
use App\Models\User;
class CosechaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cosechas=cosecha::all();
        return view('Cosecha.index',compact('cosechas'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function planificacion(){
        $cosechas=cosecha::all();
        return view('Cosecha.planificacionIndex',compact('cosechas'));
    }

    public function planificacionCreate(){
        $empresas=empresa::all();
        $usuarios=User::all();
        $envases=envase::all();
        return view('Cosecha.planificacionCreate', compact('empresas','usuarios','envases'));
    }

    public function planificacionStore(request $request){

        dd($request);
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
}
