<?php

namespace App\Http\Livewire\Graficos;

use Livewire\Component;

class Graficos extends Component
{
    public $dato=1000;
    public function sum(){
        $this->dato=2000;
        return view('livewire.graficos.graficos')->with('dato', $this->dato);;
    }
    public function render()
    {
        return view('livewire.graficos.graficos');
    }
}
