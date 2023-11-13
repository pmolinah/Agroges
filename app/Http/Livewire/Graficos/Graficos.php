<?php

namespace App\Http\Livewire\Graficos;

use App\Models\User;
use App\Models\especie;
use App\Models\campo;
use App\Models\detallecosecha;

use Livewire\Component;


class Graficos extends Component
{
    public $campoEspecie;
    public $especieEspecie;
    public $semanaEspecie;
    public $labels = [];
    public $label = [];
    public $data = [];
    public $f=0,$c=0;
    public $detalleEspecieSemanados=[];
    public $detalleEspecieSemanatres=[];
    public $detalleEspecieSemana=[];
    
    public function KilosXSemanaCampo(){
        $this->detalleEspecieSemana=[];
        $this->f=0;
        $this->c=0;
        $especies=especie::all();
        foreach($especies as $especie){
            $suma=detallecosecha::whereRaw('WEEK(created_at) = ?', [$this->semanaEspecie])->where('especie_id', $especie->id)->sum('kilos');
            if($suma>0){
                $this->detalleEspecieSemana[$this->f][0]=$especie->especie;
                $this->detalleEspecieSemana[$this->f][1]=$suma;
                $this->f++;
            }     
        }
        $this->labels = [];
        $this->data = [];
        $conteo=count($this->detalleEspecieSemana);
        for($i=0;$i<$conteo;$i++){
            $this->label[] = $this->detalleEspecieSemana[$i][0];
            $this->labels[] = $this->detalleEspecieSemana[$i][0];
            $this->data [] = $this->detalleEspecieSemana[$i][1];
        }
       
        $this->emit('updateChart', $this->labels, $this->data,  $this->label);
    }
    public function render()
    {
        $especies=especie::all();
        $campos=campo::all();
        return view('livewire.graficos.graficos',compact('especies','campos'));
    }
}
