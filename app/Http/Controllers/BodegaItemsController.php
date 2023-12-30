<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\item;
use App\Models\bodega;
use App\Models\empresa;
use App\Models\ingresobodega;
use App\Models\User;
use PDF;
class BodegaItemsController extends Controller
{
    public function BodegaItems(){
        return view('BodegaItems.BodegaItems');
    }

    public function itemStore(Request $resquest){
 
        if($resquest->hasFile('file')) { 
            $nombreFile = $resquest->file('file')->getClientOriginalName();
                        
            //no Upload path
            $destinationPath = 'Archivos/Cargados/Etiquetas/'.$resquest->tipo_id."/";
    
            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Get file extension
           
            $extension = $resquest->file('file')->getClientOriginalExtension();
          
            // Valid extensions
            $validextensions = array("jpeg","jpg","png","pdf","JPG","rar","csv","CSV","XLSX","xlsx");

            $nombreFile = $nombreFile."_".$resquest->tipo_id.".".$extension;
            $resquest->file('file')->move($destinationPath, $nombreFile); 

            if($resquest->nombre==null || $resquest->tipo_id=='Seleccione Tipo Item' || $resquest->categoria_id=='Seleccione Categoria'){
                Session::flash('error', 'Flatan Datos...');
                return back();
            }
            item::create([
                'nombre'=>$resquest->nombre,
                'tipo_id'=>$resquest->tipo_id,
                'QrBarra'=>$resquest->QrBarra,
                'marca'=>$resquest->marca,
                'unidadMedida'=>$resquest->unidadMedida,
                'ingredienteActivo'=>$resquest->ingredienteActivo,
                'presentacion'=>$resquest->presentacion,
                'clasificacion_id'=>$resquest->clasificacion_id,
                'categoria_id'=>$resquest->categoria_id,
                'etiqueta'=>$nombreFile,
                'contenido'=>$resquest->contenido,
                'capacidad'=>$resquest->capacidad,
                'stockMinimo'=>$resquest->stockMinimo,
                'observacion'=>$resquest->observacion,
            ]);
            Session::flash('success', 'Item Guardado Correctamente...');
            return back();
           
        }
    }

    public function itemUpdate(Request $request){
        if($request->hasFile('file')) {
                    
            $nombreFile = $request->file('file')->getClientOriginalName();

            $destinationPath = 'Archivos/Cargados/Etiquetas/'.$request->tipo_id."/";
    
            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Get file extension
           
            $extension = $request->file('file')->getClientOriginalExtension();

            // Check extension
                $nombreFile = $nombreFile."_".$request->tipo_id.".".$extension;
                $request->file('file')->move($destinationPath, $nombreFile); 

            item::where('id',$request->item_id)->update(['nombre'=>$request->nombre,'tipo_id'=>$request->tipo_id,'QrBarra'=>$request->QrBarra,'marca'=>$request->marca,'unidadMedida'=>$request->unidadMedida,'ingredienteActivo'=>$request->ingredienteActivo,'presentacion'=>$request->presentacion,'contenido'=>$request->contenido,'clasificacion_id'=>$request->clasificacion_id,'categoria_id'=>$request->categoria_id,'capacidad'=>$request->capacidad,'etiqueta'=>$nombreFile,'stockMinimo'=>$request->stockMinimo,'observacion'=>$request->observacion]);
            Session::flash('success', 'Item Actualizado Correctamente...');
            return back();

        }else{
            item::where('id',$request->item_id)->update(['nombre'=>$request->nombre,'tipo_id'=>$request->tipo_id,'QrBarra'=>$request->QrBarra,'marca'=>$request->marca,'unidadMedida'=>$request->unidadMedida,'ingredienteActivo'=>$request->ingredienteActivo,'presentacion'=>$request->presentacion,'contenido'=>$request->contenido,'clasificacion_id'=>$request->clasificacion_id,'categoria_id'=>$request->categoria_id,'capacidad'=>$request->capacidad,'stockMinimo'=>$request->stockMinimo,'observacion'=>$request->observacion]);
            Session::flash('success', 'Item Actualizado Correctamente...');
            return back();
        }
    }
    
    public function BodegaIngreso(){
        return view('BodegaItems.BodegaIngreso');
    }
    public function Registro(){
        $ingresosBodega=ingresobodega::where('emitida',1)->get();
        return view('BodegaItems.RegistrosEntSal',compact('ingresosBodega'));
    }
    public function IngresoBodegaPDF($id){
        $DocumentoRecepcionBodega=ingresobodega::with('detingresobodega')->where('id',$id)->get();
        foreach($DocumentoRecepcionBodega as $guiaRecep){
            PDF::SetTitle('Guía de Recepción');
            PDF::AddPage();
            //PDF::setPageFormat('letter');
            PDF::Write(0, 'Documento Ingreso');
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            if($guiaRecep->tipoDocumento_id==1){
                PDF::MultiCell(50, 4, 'Guía Despacho N°', 1, 'C', 1, 0, 108, '', true);
            }else{
                PDF::MultiCell(50, 4, 'Factura N°', 1, 'C', 1, 0, 108, '', true);
            }

            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(40, 4, $guiaRecep->numero, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Campo', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(75, 4, $guiaRecep->campo->campo, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Drección', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(75, 4, $guiaRecep->campo->direccion, 1, 'R', 1, 0, '', '', true);
            PDF::Ln(4);

            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(15, 4, 'Comuna', 1, 'C', 1, 0, 108, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::SetFont('Helvetica', '', 7);
            PDF::MultiCell(75, 4, $guiaRecep->campo->comuna->comuna, 1, 'R', 1, 0, '', '', true);

            PDF::SetFont('Helvetica', '', 10);
            PDF::Ln(2);
            PDF::Write(0, '_______________________________________________________________________________________________');
            PDF::Ln(5);
            PDF::Write(0, 'Datos Proveedor');
            PDF::Ln(5);
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Rut', 1, 'L', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(20, 4, $guiaRecep->proveedor->rut, 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(20, 4, 'Razón Social', 1, 'L', 1, 0, 43, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(80, 4, $guiaRecep->proveedor->razon_social, 1, 'C', 1, 0, '', '', true);
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(14, 4, 'Teléfono', 1, 'L', 1, 0, 143, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(40, 4, $guiaRecep->proveedor->telefono, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Comuna', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(90, 4, $guiaRecep->proveedor->comuna->comuna, 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Email', 1, 'C', 1, 0, 114, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(70, 4, $guiaRecep->proveedor->email, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(4);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Giro', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(90, 4, $guiaRecep->proveedor->giro, 1, 'C', 1, 0, '', '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(13, 4, 'Código', 1, 'C', 1, 0, 114, '', true);
            PDF::SetFillColor(253, 254, 254);
            PDF::MultiCell(70, 4, $guiaRecep->proveedor->id, 1, 'C', 1, 0, '', '', true);
            PDF::Ln(4);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(16, 4, 'Conductor', 1, 'C', 1, 0, 11, '', true);
            // PDF::SetFillColor(253, 254, 254);
            // PDF::MultiCell(90, 4, $guiaRecep->conductor->name, 1, 'C', 1, 0, '', '', true);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(13, 4, 'Patente', 1, 'C', 1, 0, 114, '', true);
            // PDF::SetFillColor(253, 254, 254);
            // PDF::MultiCell(70, 4, $guiaRecep->vehiculo->patente, 1, 'C', 1, 0, '', '', true);
            // PDF::Ln(3);
            PDF::SetFont('Helvetica', '', 10);
            PDF::Write(0, '_______________________________________________________________________________________________');
            PDF::Ln(8);

             //titulo detalle
            PDF::SetFont('Helvetica', '', 8);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(8, 4, 'Cant', 1, 'C', 1, 0, 11, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(60, 4, 'Detalle', 1, 'C', 1, 0, 19, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(20, 4, 'Cont.', 1, 'C', 1, 0, 79, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(20, 4, 'Precio', 1, 'C', 1, 0, 99, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(69, 4, 'Presentacion', 1, 'C', 1, 0, 119, '', true);
            PDF::SetFillColor(229, 231, 233);
            PDF::MultiCell(12, 4, 'Tot.', 1, 'C', 1, 0, 185, '', true);
            PDF::Ln(4);

           
            foreach ($guiaRecep->detingresobodega as $detalle ){
                PDF::SetFillColor(253, 254, 254);
                PDF::MultiCell(8, 4, $detalle->cantidad, 1, 'C', 1, 0, 11, '', true);
                PDF::MultiCell(60, 4, $detalle->item->nombre, 1, 'L', 1, 0, '', '', true);
                PDF::MultiCell(20, 4, $detalle->contenido, 1, 'C', 1, 0, '', '', true);
                PDF::MultiCell(20, 4, $detalle->precioUnitario, 1, 'C', 1, 0, '', '', true);
                PDF::MultiCell(66, 4, $detalle->presentacion, 1, 'L', 1, 0, '', '', true);
                PDF::MultiCell(12, 4, ($detalle->cantidad*$detalle->precioUnitario), 1, 'L', 1, 0, '', '', true);
                PDF::Ln(4);
            }

            //cuenta de envases por color
            // $this->guiarecepciondetalles=guiarecepcion::where('id',$id)->get();
            // foreach($this->guiarecepciondetalles as $GuiaID){
            //     $this->guiaRepID=$GuiaID->id;
            // }
            // PDF::Ln(10);

            // PDF::SetFont('Helvetica', '', 8);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(50, 4, 'Envase', 1, 'C', 1, 0, 11, '', true);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(31, 4, 'Color', 1, 'C', 1, 0, 61, '', true);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(11, 4, 'Suma', 1, 'C', 1, 0, 92, '', true);
            // PDF::Ln(4);
            // $envases=envase::all();
            // foreach($envases as $envase){
            //     $colores=color::all();
            //         foreach($colores as $color){
            //             $detalleGuiaRecepcion=guiarecepciondetalle::where('guiarecepcion_id',$id)->where('envase_id',$envase->id)->where('color_id',$color->id)->count();
            //             if($detalleGuiaRecepcion>0){
            //                 $suma=guiarecepciondetalle::where('guiarecepcion_id',$id)->where('envase_id',$envase->id)->where('color_id',$color->id)->sum('cantidadEnvase');
            //                 PDF::SetFillColor(253, 254, 254);
                            
            //                 PDF::MultiCell(50, 4, $envase->envase, 1, 'L', 1, 0, 11, '', true);
                            
            //                 PDF::MultiCell(31, 4, $color->color, 1, 'C', 1, 0, 61, '', true);
                          
            //                 PDF::MultiCell(11, 4, $suma, 1, 'C', 1, 0, 92, '', true);
            //             }
            //             PDF::Ln(4);
            //             $this->lineaNegativa=$this->lineaNegativa-4;
            //         }
            // }
        // 
            // PDF::Ln(-8);
            // PDF::Ln($this->lineaNegativa);
            // PDF::SetFont('Helvetica', '', 8);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::Ln(4);
            // PDF::MultiCell(50, 4, 'Especie', 1, 'C', 1, 0, 104, '', true);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(31, 4, 'Observación', 1, 'C', 1, 0, 154, '', true);
            // PDF::SetFillColor(229, 231, 233);
            // PDF::MultiCell(12, 4, 'Kilos', 1, 'C', 1, 0, 185, '', true);
            // PDF::Ln($this->lineaNegativa);
             //cuenta de frutas por especie
            // $especies=especie::all();
            // foreach($especies as $especie){
            //     $observaciones=observacion::all();
            //         foreach($observaciones as $observacion){
            //             $detalleGuiaRecepcionEspecie=guiarecepciondetalle::where('guiarecepcion_id',$id)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->count();
            //             if($detalleGuiaRecepcionEspecie>0){
            //                 $suma=guiarecepciondetalle::where('guiarecepcion_id',$id)->where('especie_id',$especie->id)->where('observacion_id',$observacion->id)->sum('kilos');
            //                 if($especie->especie!='N/A' || $observacion->observacion!='Vacio'){
                              
            //                     PDF::SetFillColor(253, 254, 254);
                            
            //                     PDF::MultiCell(50, 4, $especie->especie, 1, 'L', 1, 0, 104, '', true);
                                
            //                     PDF::MultiCell(31, 4, $observacion->observacion, 1, 'C', 1, 0, 154, '', true);
                              
            //                     PDF::MultiCell(12, 4, $suma, 1, 'C', 1, 0, 185, '', true);
            //                 }
            //             }
            //             PDF::Ln(4);
            //             $this->i++;
            //         }
            // }
        //



            PDF::Output('Guia_recepcion_numero'.$guiaRecep->numero.'pdf');
            
        }
    }
}
