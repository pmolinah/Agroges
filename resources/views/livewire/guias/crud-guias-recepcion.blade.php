<div>
     <div class="grid sm:grid-cols-1 md:grid-cols-12 bg-neutral-100 shadow-2xl p-5">

        <div class="col-span-2 text-primary-500 font-bold p-2 mt-1 text-xl">
            Guía de Recepción 
        </div>
        <div class="col-span-1 text-info-700 font-semibold p-2 mt-2 ml-2">
            Fecha
        </div>
        <div class="text-center col-span-2 p-2 mt-1 border-double border-4 border-sky-500">
            <input type="date" wire:model="fechaGuia" class="w-full">
        </div>
        <div class="col-span-3 p-2 ml-4 mt-2">
            <select wire:model.defer="campo_id" wire:change="SeleccionCampo_id" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>Seleccionar Campo</option>
                
                    @foreach ($campos as $campo)
                        
                            <option value="{{ $campo->id}}">{{ $campo->campo }}</option>
                      
                    @endforeach
                
            </select>
        </div>
        
        <div class="col-span-3 p-2 ml-4 mt-2">
            <select wire:model.defer="exportadora_id" wire:change="SeleccionExportadora_id" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>Seleccionar Empresa Exportadora</option>
                
                    @foreach ($exportadoras as $exportadora)
                        
                            <option value="{{ $exportadora->id}}">{{ $exportadora->razon_social }}</option>
                      
                    @endforeach
                
            </select>
        </div>
       
    </div>
        <hr class="my-2 h-0 border border-t-0 border-solid border-neutral-700 opacity-25 dark:border-neutral-200" />
                                
    <div class="grid sm:grid-cols-1 md:grid-cols-12 bg-neutral-100 shadow-2xl p-5">
                <div class="col-span-12 text-3xl text-primary-500 text-right">
                    Guia N°..: {{$numeroGuiaRecepcion}}
                    <input type="hidden" wire:model.defer="NumGuiaRec" value="{{$numeroGuiaRecepcion}}">
                </div>
            
                <div class="col-span-7">
                
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Campo</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="" wire:model.defer="NombreCampo">
                 
                     
                </div>
                <div class="col-span-7">
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Dirección</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="" wire:model.defer="DireccionCampo">
                </div>
                <div class="col-span-7">
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Fecha</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="{{$fechaGuia}}" >
                </div>
                
                {{-- datos exportadora --}}
                 <div class="col-span-1 mt-8 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Rut..................:</label>
                </div>
                <div class="col-span-1  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$rutExportadora}}">
                </div>
                <div class="col-span-1 mt-8 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Exportadora:</label>
                </div>
                <div class="col-span-4  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$razonSocialExportadora}}">
                </div>
                 <div class="col-span-1 mt-8  p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Dirección......:</label>
                </div>
                <div class="col-span-4  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$direccionExportadora}}">
                </div>
                 
                 <div class="col-span-1 mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Comuna........:</label>
                </div>
                <div class="col-span-4  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$comunaExportadora}}">
                </div>
                 <div class="col-span-1 mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Email..............:</label>
                </div>
                <div class="col-span-6  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$emailExportadora}}">
                </div>
                <div class="col-span-1 mt-2 p-1">
                    <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Giro.................:</label>
                </div>
                <div class="col-span-8 w-96  text-right mt-1 border-dotted border-2 border-sky-500">
                    <input type="text" class="uppercase w-full p-2 text-left" value="{{$giroExportadora}}">
                </div>

               
                <div class="col-span-6 p-2  mt-2 border-dotted border-2 border-sky-500">
                         Conductor
                    <select wire:model.defer="conductor_id"  class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option></option>
                        
                            @foreach ($conductores as $conductor)
                                
                                    <option value="{{ $conductor->id}}">{{ $conductor->name }}</option>
                            
                            @endforeach
                        
                    </select>
                
                </div>
                <div class="col-span-6 p-2  mt-2 border-dotted border-2 border-sky-500">
                         Patente
                        <select wire:model.defer="vehiculo_id"  class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option></option>
                            
                                @foreach ($vehiculos as $vehiculo)
                                    
                                        <option value="{{ $vehiculo->id}}">{{ $vehiculo->patente }}</option>
                                
                                @endforeach
                            
                        </select>
                    
                </div>
                <div class="col-start-7  col-span-3  text-right mt-1 p-2">
                    <button type="button" wire:click="AgregarGuiaRecepcion" class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                        Guardar y Agregar Detalle
                    </button>
                </div>
                 {{-- <div class="col-start-10  col-span-3  text-right mt-1 p-2">
                    <button type="button" wire:click="EliminarGuia" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                        Eliminar Guía de Recepción
                    </button>
                </div> --}}
                <div class="text-center col-span-12 mt-4">
                    <h6 class="text-primary-500 text-2xl leading-tight">Detalle</h6>
                </div>
                             
            @if($visible)                  
                <div class="col-span-12">
                     <table class="border-dotted mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            
                                <tr class="border-dotted mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="w-24 font-bold border-dotted mt-3 border-2 border-sky-500">Cant/Env.</td>
                                    <td class="w-96 font-bold border-dotted mt-3 border-2 border-sky-500">Detalle</td>
                                    <td class="w-48 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Color/Envase</td>
                                    <td class="w-48 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Observacion</td>
                                    <td class="w-96 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Especie/Variedad</td>
                                    <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Kilos</td>
                                    <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500 p-2"><i class="fa-solid fa-trash"></i></td>
                                </tr>
                                <tr class="border-dotted mt-3 border-2 border-sky-500 ">
                                    <td class="text-center w-24 font-bold border-dotted mt-3 border-2 border-sky-500"><input type="text" wire:model.defer="Cantidad" class="uppercase w-24 h-7" value="" placeholder="Cantidad"></td>
                                    <td class="w-96 font-bold border-dotted mt-3 border-2 border-sky-500">
                                        <select wire:model.defer="envase_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Envase</option>
                                                @foreach ($envases as $envase)
                                                        <option value="{{ $envase->id}}">{{ $envase->envase }}</option>
                                                @endforeach
                                        </select>
                                    </td>
                                    <td class="w-48 font-bold text-center border-dotted mt-3 border-2 border-sky-500">
                                        <select wire:model.defer="color_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Color</option>
                                                @foreach ($colores as $color)
                                                        <option value="{{ $color->id}}">{{ $color->color }}</option>
                                                @endforeach
                                        </select>
                                          
                                    </td>
                                    <td class="w-48 font-bold text-center border-dotted mt-3 border-2 border-sky-500">
                                        <select wire:model.defer="observacion" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Observaciòn</option>
                                           @foreach ($observaciones as $observacion )
                                              <option value="{{$observacion->id}}">{{$observacion->observacion}}</option> 
                                           @endforeach
                                        </select>
                                    </td>
                                    <td class="w-96 font-bold text-center border-dotted mt-3 border-2 border-sky-500">
                                        <select wire:model.defer="especie_id"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="0">Especie</option>
                                            @foreach ($especies as $especie )
                                                <option value="{{$especie->id}}">{{$especie->especie}}</option>
                                            @endforeach
                                        </select>
                                           
                                                
                                    </td>
                                    <td class="text-center w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500"><input type="text" wire:model.defer="kilos" class="uppercase w-24 h-7" value="" placeholder="Kilos"></td>
                                    <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500 p-2">
                                        <button type="button" wire:click="AgregarLinea" class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guiarecepciondetalles as $guiarecepciondetalle )
                                    @foreach ($guiarecepciondetalle->guiarecepciondetalle as $detalle )
                                        <tr class="border-dotted mt-3 border-2 border-sky-500">
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->cantidadEnvase}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->envase->envase}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->color->color}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->observacion->observacion}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->especie->especie}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{$detalle->kilos}}</td>
                                            <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">
                                                 <button type="button" wire:click="QuitarLinea({{$detalle->id}})" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach   
                                @endforeach
                            </tbody>
                        </table>
                </div>
            @endif
                {{-- tabla de resunmen --}}
                <div class="col-span-6 p-2">
                     <table class="border-dotted mt-3 border-2 border-sky-500 w-full">
                     <label>Consolidados de Envases por Color</label>
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            
                                <tr class="border-dotted mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="w-96 font-bold border-dotted mt-3 border-2 border-sky-500">Envase</td>
                                    <td class="w-24 font-bold border-dotted mt-3 border-2 border-sky-500">Color</td>
                                    <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Cantidad</td>
                                    {{-- <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Kilos</td> --}}
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($matrizEnvaseColor as $elementoExterno)
                                            <tr class="border-dotted mt-3 border-2 border-sky-500">
                                                @foreach ($elementoExterno as $elementoInterno)
                                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{ $elementoInterno }}</td>
                                                @endforeach
                                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                                   
                {{-- fin tabla de resumen --}}
                 {{-- tabla de resunmen --}}
                <div class="col-span-6 p-2">
                     <table class="border-dotted mt-3 border-2 border-sky-500 w-full">
                     <label>Consolidados de Especies por Observación</label>
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            
                                <tr class="border-dotted mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="w-96 font-bold border-dotted mt-3 border-2 border-sky-500">Especie</td>
                                    <td class="w-24 font-bold border-dotted mt-3 border-2 border-sky-500">Observación</td>
                                    <td class="w-24font-bold text-center border-dotted mt-3 border-2 border-sky-500">Kilos</td>
                                    {{-- <td class="w-24 font-bold text-center border-dotted mt-3 border-2 border-sky-500">Kilos</td> --}}
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($matrizEspecieKilos as $elementoExterno)
                                            <tr class="border-dotted mt-3 border-2 border-sky-500">
                                                @foreach ($elementoExterno as $elementoInterno)
                                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">{{ $elementoInterno }}</td>
                                                @endforeach
                                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                                   
                {{-- fin tabla de resumen --}}

            <div class="col-span-12 text-center">
                <div class="text-center col-start-4 col-span-5 mb-8 shadow-2xl">
                    <label class="font-bold">Observación Max 100 Caractéres<p>(Opcional)</p></label>
                    <textarea wire:model.defer="observacion" rows="3"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                <div class="col-start-1 col-span-5">
                    <button
                        type="button" wire:click="generarGuiaRecepcion"
                        class="mb-2 block w-full rounded bg-primary p-5 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Generar Guía de Recepción
                    </button>
                </div>
                
</div>
                                            
                                       
                                    
                                            
                                         
                                            
                          
                                  
                              
                                   

                                        
                                           
                              