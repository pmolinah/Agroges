<div>
    <div class="grid sm:grid-cols-1 md:grid-cols-12 bg-neutral-100 shadow-2xl p-5">

        <div class="col-span-2 text-primary-500 font-bold p-2 mt-1 text-3xl">
            Guía de Despacho
        </div>
        <div class="col-span-1 text-info-700 font-semibold p-2 mt-2 ml-2">
            Fecha/Inicial
        </div>
        <div class="text-center col-span-2 p-2 mt-1 border-double border-4 border-sky-500">
            <input type="date" wire:model.defer="fechainicial" class="w-full">
        </div>
        <div class="text-center col-span-2 p-2 mt-1 border-double border-4 border-sky-500">
            <input type="date" wire:model="fechafinal" class="w-full">
        </div>
        <div class="col-span-3 p-2 ml-4 mt-2">
            <select wire:model.defer="exportadorxplanificacionID" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>Seleccionar Empresa Exportadora</option>
                @foreach ($planificacioncosecha as $planificacion)
                    @foreach ($planificacion->exportadoraxplanificacion as $exportadora)
                        <option value="{{ $exportadora->id}}">{{ $exportadora->empresa->razon_social }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
        <div class="col-span-2 bg-orange-1200 mt-1">

            <button type="button" wire:click="CargarInformacion"
                class="mt-2 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                Cargar Exportadora
            </button>
        </div>
    </div>
        <hr class="my-2 h-0 border border-t-0 border-solid border-neutral-700 opacity-25 dark:border-neutral-200" />
                                
    <div class="grid sm:grid-cols-1 md:grid-cols-12 bg-neutral-100 shadow-2xl p-5">
        <div class="col-span-12 text-3xl text-primary-500 text-right">
            Guia N° xxxxxxxx
        </div>
            @foreach ($exportadoraxplanificacion as $expplan )
                <div class="col-span-7">
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Empresa Campo</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="{{$expplan->planificacioncosecha->cuartel->campo->empresa->razon_social}}">
                </div>
                <div class="col-span-7">
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Dirección</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="{{$expplan->planificacioncosecha->cuartel->campo->empresa->direccion}}">
                </div>
                <div class="col-span-7">
                </div>
                <div class="col-span-2 text-right mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Fecha</label>
                </div>
                <div class="col-span-3  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-center" value="{{ date('Y-m-d H:i:s') }}">
                </div>
                
                {{-- datos exportadora --}}
                 <div class="col-span-1 mt-8 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Rut..................:</label>
                </div>
                <div class="col-span-1  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$expplan->empresa->rut}}">
                </div>
                <div class="col-span-1 mt-8 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Exportadora:</label>
                </div>
                <div class="col-span-4  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$expplan->empresa->razon_social}}">
                </div>
                 <div class="col-span-1 mt-8  p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Dirección......:</label>
                </div>
                <div class="col-span-4  text-right mt-7 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$expplan->empresa->direccion}}">
                </div>
                  {{-- <div class="col-span-2">
                </div> --}}
                 <div class="col-span-1 mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Comuna........:</label>
                </div>
                <div class="col-span-4  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$expplan->empresa->comuna->comuna}}">
                </div>
                 <div class="col-span-1 mt-2 p-1">
                        <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Email..............:</label>
                </div>
                <div class="col-span-6  text-right mt-1 border-dotted border-2 border-sky-500">
                        <input type="text" class="uppercase w-full p-2 text-left" value="{{$expplan->empresa->email}}">
                </div>
                <div class="col-span-1 mt-2 p-1">
                    <label class="border-solid border-2 border-sky-500 text-xl p-1 font-medium leading-tigh">Giro.................:</label>
                </div>
                <div class="col-span-4  text-right mt-1 border-dotted border-2 border-sky-500">
                    <input type="text" class="uppercase w-full p-2 text-left" value="">
                </div>
                <div class="text-center col-span-12 mt-4">
                    <h6 class="text-primary-500 text-3xl leading-tight">Detalle Kilos</h6>
                </div>
                <div class="col-span-12">
                     <table class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="font-bold border-dotted mt-3 border-2 border-sky-500">Especie</td>
                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">Tarja/Envase</td>
                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">Cantidad Kilos</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php $sum=0; @endphp
                                @foreach ($detalleCosecha as $detalle)
                                    <tr>
                                        <td class= "w-96 border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{$expplan->planificacioncosecha->plantacion->especie->especie}}, Especie.:{{$expplan->planificacioncosecha->plantacion->especie->variedad->variedad}}</td>
                                        <td class="text-center w-64 border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{$detalle->tarjaenvase}}</td>
                                        <td class="text-center w-24 border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{$detalle->kilos}}</td>
                                    </tr>
                                            @php $sum = $sum + $detalle->kilos @endphp
                                @endforeach
                                    
                            </tbody>
                        </table>
                </div>
                <div class="col-span-10"></div>
                <div class="mt-3 col-span-1 border-dotted border-2 border-sky-500">Total</div>
                <div class="text-center mt-3 col-span-1 border-dotted border-2 border-sky-500">{{$sum}}</div>
                
                <div class="text-center col-span-12 mt-4">
                    <h6 class="text-primary-500 text-3xl leading-tight">Detalle Envases</h6>
                </div>
                <div class="col-span-12">
                     <table class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="font-bold border-dotted mt-3 border-2 border-sky-500">Envase</td>
                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">Color</td>
                                    <td class="font-bold text-center border-dotted mt-3 border-2 border-sky-500">Cantidad</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php $sumar=0; @endphp
                                @foreach ($expplan->desgloseenvase as $detalleEnvase)
                                    <tr>
                                        <td class= "w-96 border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{$detalleEnvase->exportadoraxplanificacion->planificacioncosecha->envase->envase}}</td>
                                        <td class="text-center w-64 border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{$detalleEnvase->color->color}}</td>
                                        <td class="text-center w-24 border-dotted w-full mt-3 border-2 border-sky-500">
                                           {{$detalleEnvase->stock}}</td>
                                           @php $sumar = $sumar + $detalleEnvase->stock @endphp
                                    </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                </div>
                <div class="col-span-10"></div>
                <div class="mt-3 col-span-1 border-dotted border-2 border-sky-500">Total</div>
                <div class="text-center mt-3 col-span-1 border-dotted border-2 border-sky-500">{{$sumar}}</div>
            @endforeach
    </div>
    @if($visible)
        <div class="grid grid-cols-12 mt-8">
            <div class="col-start-1 col-span-5">
                <button
                    type="button" wire:click="generarGuia"
                    class="mb-2 block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    Generar Guía de Despacho
                </button>
            </div>
            <div class="col-start-7 col-span-12">
                <button
                    type="button" wire:click="editarGuia"
                    class="mb-2 block w-full rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    Generar Guía de Despacho
                </button>
            </div>
        </div>
    @endif
</div>
                                    

