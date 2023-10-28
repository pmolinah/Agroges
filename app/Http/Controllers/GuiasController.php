<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guia;
use App\Models\exportadoraxplanificacion;
use App\Models\detallecosecha;

use PDF;
class GuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $lineas=1;
    public $suma=0;
    public function index()
    {
        return view('Guia.index');
    }

    public function GuiaRecepcion(){
       
        return view('Guia.CrudGuiasRecepcion');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show()
    {
        $guias=guia::all();
        return view('Guia.GuiasShow',compact('guias'));
    }

    public function GuiaDespacho($guia_id){

        $DatosGuia=guia::where('id',$guia_id)->get();
        foreach($DatosGuia as $GuiaDespacho){

            PDF::SetTitle('Guía de Despacho');
            PDF::AddPage();
            // PDF::setPageFormat('letter');
            // PDF::Write(0, 'Guía de Despacho N°');
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(50, 4, 'Guía de Despacho N°', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(40, 4, $GuiaDespacho->numero, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Campo', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(75, 4, $GuiaDespacho->planificacioncosecha->cuartel->campo->campo, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Drección', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(75, 4, $GuiaDespacho->planificacioncosecha->cuartel->campo->direccion, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);

            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Comuna', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::SetFont('Helvetica', '', 7);
            PDF::MultiCell(75, 4, $GuiaDespacho->planificacioncosecha->cuartel->campo->comuna->comuna, 1, 'R', 1, 0, '', '', true);
         
            PDF::SetFont('Helvetica', '', 10);
            PDF::Ln(2);
            PDF::Write(0, '_______________________________________________________________________________________________');
            PDF::Ln(5);
            PDF::Write(0, 'Datos Cliente');
            PDF::Ln(5);
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Rut', 1, 'L', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(20, 4, $GuiaDespacho->planificacioncosecha->cuartel->campo->rut, 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(20, 4, 'Razón Social', 1, 'L', 1, 0, 43, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(80, 4, $GuiaDespacho->empresa->razon_social, 1, 'C', 1, 0, '', '', true);
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(14, 4, 'Teléfono', 1, 'L', 1, 0, 143, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(40, 4, $GuiaDespacho->empresa->telefono, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Comuna', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(90, 4, $GuiaDespacho->empresa->comuna->comuna, 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Email', 1, 'C', 1, 0, 114, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(70, 4, $GuiaDespacho->empresa->email, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Giro', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(90, 4, 'Falta', 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Código', 1, 'C', 1, 0, 114, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(70, 4, $GuiaDespacho->empresa->email, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(3);
            PDF::SetFont('Helvetica', '', 10);
            PDF::Write(0, '_______________________________________________________________________________________________');
            PDF::Ln(8);
            //titulo detalle
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(8, 4, 'N', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(110, 4, 'Detalle Cosecha', 1, 'C', 1, 0, 19, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(40, 4, 'Tarja/Envase', 1, 'C', 1, 0, 129, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(28, 4, 'Kilos', 1, 'C', 1, 0, 169, '', true);
            PDF::Ln(4);
          
                    $detalleCosecha=detallecosecha::where('planificacioncosecha_id',$GuiaDespacho->planificacioncosecha_id)->where('exportadora_id',$GuiaDespacho->empresa_id)->get();
                    foreach($detalleCosecha as $detalle){
                       
                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(8, 4, $this->lineas, 1, 'C', 1, 0, 11, '', true);
                        
                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(110, 4, $GuiaDespacho->planificacioncosecha->plantacion->especie->especie.',  Variedad : '.$GuiaDespacho->planificacioncosecha->plantacion->especie->variedad->variedad, 1, 'L', 1, 0, 19, '', true);
                        
                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(40, 4, $detalle->tarjaenvase, 1, 'C', 1, 0, '', '', true);

                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(28, 4, $detalle->kilos, 1, 'C', 1, 0, '', '', true);
                        $this->lineas++;
                        $this->suma = $this->suma + $detalle->kilos;
                        PDF::Ln(4);
                    }
                PDF::Ln(4);  
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(40, 4, 'Total Kilos', 1, 'C', 1, 0, 129, '', true);  
                PDF::SetFillColor(253, 254, 254);
                PDF::MultiCell(28, 4, $this->suma, 1, 'C', 1, 0, 169, '', true);     
                PDF::Ln(10);
                 //titulo detalle envase
                PDF::SetFont('Helvetica', '', 8);
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(8, 4, 'N', 1, 'C', 1, 0, 11, '', true);
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(110, 4, 'Detalle Envase', 1, 'C', 1, 0, 19, '', true);
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(40, 4, 'Color', 1, 'C', 1, 0, 129, '', true);
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(28, 4, 'Cantidad', 1, 'C', 1, 0, 169, '', true);
                PDF::Ln(4);
                $this->lineas=1;
                $this->suma=0;
                $exportadoraxplanificacion=exportadoraxplanificacion::with('desgloseenvase')->where('planificacioncosecha_id',$GuiaDespacho->planificacioncosecha_id)->where('empresa_id',$GuiaDespacho->empresa_id)->get();
                foreach($exportadoraxplanificacion as $exporxplan){
                    foreach ($exporxplan->desgloseenvase as $detalleEnvase){

                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(8, 4, $this->lineas, 1, 'C', 1, 0, 11, '', true);
                        
                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(110, 4, $exporxplan->planificacioncosecha->envase->envase, 1, 'L', 1, 0, 19, '', true);
                        
                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(40, 4, $detalleEnvase->color->color, 1, 'C', 1, 0, '', '', true);

                        PDF::SetFillColor(253, 254, 254);
                        PDF::MultiCell(28, 4, $detalleEnvase->stock, 1, 'C', 1, 0, '', '', true);
                        $this->lineas++;
                        $this->suma = $this->suma + $detalleEnvase->stock;
                        PDF::Ln(4);
                    }
                }

                PDF::Ln(4);  
                PDF::SetFillColor(229, 231, 233);
                PDF::MultiCell(40, 4, 'Total Envases', 1, 'C', 1, 0, 129, '', true);  
                PDF::SetFillColor(253, 254, 254);
                PDF::MultiCell(28, 4, $this->suma, 1, 'C', 1, 0, 169, '', true);     
                PDF::Ln(10);


            PDF::Output('Guia_despacho_numero'.$GuiaDespacho->numero.'pdf');
            
        }
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
