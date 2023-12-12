<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BodegaItemsController extends Controller
{
    public function BodegaItems(){
        return view('BodegaItems.BodegaItems');
    }
}
