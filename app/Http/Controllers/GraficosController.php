<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraficosController extends Controller
{
    
    public function Graficos(){
        return view('graficos.graficos');
    }
}
