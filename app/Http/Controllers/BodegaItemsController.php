<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\item;
use App\Models\bodega;
use App\Models\empresa;
use App\Models\User;
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
}
