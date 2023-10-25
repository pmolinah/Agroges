<div>
    <form action="{{ route('Cosecha.store') }}" method="post">
        @CSRF
        @foreach ($planificacion as $planificacionDatos)
            <input type="hidden" value="{{ $planificacionDatos->id }}" name="planificacionCosecha_id">
            <div class="flex flex-row">
                {{-- columna 1 --}}
                <div class=" w-1/2 mr-5 border-dotted  border-2 border-sky-500 shadow-2xl p-5">
                    <div class="flex">
                        <div class="w-1/5 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Contratista</label>
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="contratista_id" wire:model.defer="contratista_id"> <!-- name="contratista_id" -->
                                <option>Seleccione Contratista</option>
                                @foreach ($planificacionDatos->contraistaxplanificacion as $contratista)
                                    <option value="{{ $contratista->contratista_id }}">
                                        {{ $contratista->contratista->razon_social }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" wire:model.defer="contratista_id"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> --}}
                        </div>
                        <div class="w-1/5 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Exportadora</label>
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="expoID" wire:model.defer="exportadoraID"> <!-- name="contratista_id" -->
                                <option>Seleccione Exportadora</option>
                                @foreach ($planificacionDatos->exportadoraxplanificacion as $exportadora)
                                    <option value="{{ $exportadora->empresa_id }}">
                                        {{ $exportadora->empresa->razon_social }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" wire:model.defer="contratista_id"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> --}}
                        </div>

                        <div class="w-1/5 px-2">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tarja
                                Env.</label>
                            <input type="text" wire:model.defer="tarjaenvase"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="w-1/5 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Kilos</label>
                            <input type="text" wire:model.defer="kilos"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <div class="w-1/5 px-2 mt-6">
                            <button type="button" wire:click="agregarKilos" id="agregarKilos-dehabilitado"
                                class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Añadir
                            </button>
                        </div>
                    </div>
                    <input type="hidden" value="{{ $planificacionDatos->id }}"
                        wire:model.defer="planificacioncosecha_id">
                    {{-- tabla --}}
                    <div class="w-full mt-3">
                        <table class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted w-full mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Contratista</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Exportadora</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Tarja/Env.</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Kilos</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Eliminar</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalleCo as $cosecha)
                                    <tr>

                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $cosecha->empresa->razon_social }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $cosecha->exportadora->razon_social }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $cosecha->tarjaenvase }}.</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $cosecha->kilos }}
                                        </td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500"><button
                                                type="button" wire:click="ElimnarRegistro({{ $cosecha->id }})"
                                                class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    {{-- fin tabla --}}
                    {{ $detalleCo->links() }}
                </div>
                {{-- columna 2 --}}
                {{-- inicio form --}}


                <div class="w-1/2 mr-5 border-dotted  border-2 border-sky-500 shadow-2xl p-5">

                    <div class="sm:col-span-1 md:col-span-6">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Datos de la Planificación de la
                            Cosecha
                        </h2>
                    </div>

                    <div class="flex">

                        <div class="px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Fecha/Hora</label>
                            <input type="text" name="region" value="{{ date('d-m-Y') }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="px-2">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                Inicial</label>
                            <input type="text" name="region" value="{{ $planificacionDatos->fechai }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="px-2">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                Final</label>
                            <input type="text" name="region" value="{{ $planificacionDatos->fechaf }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="px-2">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Semana
                                ISO</label>
                            <input type="text" name="region" value="{{ date('W') }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    {{-- tabla --}}
                    <div class="w-full">
                        <h2 class="text-base font-semibold leading-7 text-gray-900 mt-3">Datos de la empresa Contratista
                        </h2>
                        <table class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted w-full mt-3 border-2 border-sky-500 bg-primary-100">
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Contrastista</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Trato/Cos.</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Kilos/Actuales</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Costo/Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planificacionDatos->contraistaxplanificacion as $contratista)
                                    <tr>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $contratista->contratista->razon_social }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $contratista->tratoxcosecha }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $contratista->kilos }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $contratista->costototal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- fin tabla --}}
                    {{-- tabla --}}
                    <div class="w-full">
                        <h2 class="text-base font-semibold leading-7 text-gray-900 mt-3">Datos de las Empresas
                            Exportadoras
                        </h2>
                        <table class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted w-full mt-3 border-2 border-sky-500 bg-secondary-100">
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Exportadora</td>
                                    {{-- <td class="border-dotted w-full mt-3 border-2 border-sky-500">Trato/Cos.</td> --}}
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Kilos/Sol.</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Tipo/Env.</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Stock/Env.</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                        Kilos/Reales/Asignados</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Env./Reales</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total=0; @endphp
                                @foreach ($planificacionDatos->exportadoraxplanificacion as $exportadora)
                                    <tr>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $exportadora->empresa->razon_social }}</td>
                                        {{-- <td class="border-dotted w-full mt-3 border-2 border-sky-500">1543</td> --}}
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $exportadora->kilosSolicitados }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $exportadora->cuentaenvase->envase->envase }}</td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                            {{ $exportadora->cuentaenvase->saldo }}

                                        </td>
                                        <input type="hidden" name="exportadora_id[]"
                                            value="{{ $exportadora->id }}">
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500"><input
                                                type="text" name="valores[]"
                                                value="{{ $exportadora->KilosRecolectados }}"
                                                id="kilosExpo{{ $exportadora->id }}"
                                                class="w-full border-dotted border-2 border-sky-500"></td>
                                        <td class="border-dotted w-full mt-3 border-2 border-sky-500"><input
                                                type="text" name="bines[]" value="{{ $exportadora->envasesUtilizadosReales }}"
                                                class="w-full border-dotted border-2 border-sky-500"></td>
                                    </tr>
                                    @php $total = $total + $exportadora->kilosSolicitados @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- fin tabla --}}
                    <h2 class="text-base font-semibold leading-7 text-gray-900 mt-3">Información de Bines
                        Utilizados, Color y Cantidad x Exportadora
                    </h2>
                    {{-- detalle de bines y colores utilizados --}}
                    <div class="flex">

                        <div class="px-2 w-2/5 mt-6">
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="expoID" wire:model.defer="exportadoraIDDetalle">
                                <!-- name="contratista_id" -->
                                <option>Seleccione Exportadora</option>
                                @foreach ($planificacionDatos->exportadoraxplanificacion as $exportadora)
                                    <option value="{{ $exportadora->id }}">
                                        {{ $exportadora->empresa->razon_social }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="px-2 w-1/5 text-center">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">
                                Cantidad</label>
                            <input type="text"  wire:model.defer="cantidadDetalle"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="px-2 w-1/5 mt-6">
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="expoID" wire:model.defer="coloresDDetalle"> <!-- name="contratista_id" -->
                                <option>Color Envase</option>
                                @foreach ($colores as $color)
                                    <option value="{{ $color->id }}">
                                        {{ $color->color }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="px-2 mt-5 w-1/5">
                            <button type="button" wire:click="agregarDetalleEnvase"
                                class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Añadir
                            </button>
                        </div>
                    </div>
                    {{-- fin --}}
                    {{-- tabla --}}
                    <div class="w-full">
                        <table id="tablaDetalle" class="border-dotted w-full mt-3 border-2 border-sky-500">
                            <thead class="border-dotted w-full mt-3 border-2 border-sky-500">
                                <tr class="border-dotted w-full mt-3 border-2 border-sky-500 bg-secondary-100">
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Exportadora</td>

                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Cantidad</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Color</td>
                                    <td class="border-dotted w-full mt-3 border-2 border-sky-500">Quitar</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planificacionDatos->exportadoraxplanificacion as $exportador)
                                    @foreach ($exportador->desgloseenvase as $desglose)
                                    {{-- {{$exportador->id }},{{$desglose->exportadoraxplanificacion_id}} --}}
                                        @if ($exportador->id == $desglose->exportadoraxplanificacion_id)
                                            <tr
                                                class="border-dotted w-full mt-3 border-2 border-sky-500 bg-neutral-50">
                                                <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                                    {{ $desglose->exportadoraxplanificacion->empresa->razon_social }}
                                                </td>

                                                <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                                    {{ $desglose->stock }}</td>
                                                <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                                    {{ $desglose->color->color }}</td>
                                                <td class="border-dotted w-full mt-3 border-2 border-sky-500">
                                                    <button type="button"
                                                        wire:click="ElimnarDetalleEnvase( {{ $desglose->id }})"
                                                        class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </td>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- fin tabla --}}
                    <h2 class="text-base font-semibold leading-7 text-gray-900 mt-3">Datos del Proceso de Cosecha
                    </h2>
                    <div class="flex">
                        <div class="w-1/2 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Capataz</label>
                            <input type="text" name="region"
                                value="{{ $planificacionDatos->plantacion->cuartel->capataz->name }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="w-1/2 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Envase/Campo
                            </label>
                            <input type="text" name="region" value="{{ $planificacionDatos->envase->envase }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                    </div>
                    <div class="flex">
                        <div class="w-1/2 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Cosechado/Actual
                            </label>
                            <input type="text" id="cosechaActual" name="cosechaActual"
                                wire:model.defer="cosechaActual"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <div class="w-1/2 px-2">
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Cosecha/Solicitada
                            </label>
                            <input type="text" name="region" value="{{ $total }}"
                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
        @endforeach
        <!-- Button trigger modal -->
        <div class="m-3">
            <button type="submit" onclick="validarDatos()"
                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                data-te-toggle="modal" data-te-target="#exampleModalXl" data-te-ripple-init
                data-te-ripple-color="light">
                Cierre de Cosecha
            </button>
        </div>
</div>
<script>
    function validarDatos() {
        var totalCosechaReal = 0;
        $('input[name^="valores["]').each(function(index, elemento) {
            // Acceder al valor de cada campo de entrada
            var valor = $(elemento).val();
            if (valor === "" || valor === null || valor === undefined || valor === "0") {
                alert('No puede Existir una Exportadora con 0 kilos');
                event.preventDefault();
            }
            totalCosechaReal = parseFloat(totalCosechaReal) + parseFloat(valor);
        });


        var cosechaActual = $('#cosechaActual').val();
        if (cosechaActual != totalCosechaReal) {
            alert('Diferencia de Kilos por asignar')
            event.preventDefault();
        }
        //else{
        //   alert('ok');
        //Livewire.emit('cierreCosecha')
        //}

        //});
    }
</script>


<script>
    window.addEventListener('KilosCompletados', function(e) {
        Swal.fire({
            icon: 'success',
            title: 'kilos Completados...',
            text: '{{ Session::get('success') }}',
            timer: 5000,
            showConfirmButton: false
        });
    });
     window.addEventListener('sumaDetalleEnvases', function(e) {
        Swal.fire({
            icon: 'success',
            title: 'Enases Agregados...',
            text: '{{ Session::get('success') }}',
            timer: 5000,
            showConfirmButton: false
        });
    });
    window.addEventListener('KilosEliminados', function(e) {
        Swal.fire({
            icon: 'warning',
            title: 'Éxito, Registro Eliminado...',
            text: '{{ Session::get('success') }}',
            timer: 5000,
            showConfirmButton: false
        });
    });
      window.addEventListener('EliminacionDetalleEnvase', function(e) {
        Swal.fire({
            icon: 'warning',
            title: 'Éxito, Registro Eliminado...',
            text: '{{ Session::get('success') }}',
            timer: 5000,
            showConfirmButton: false
        });
    });
    window.addEventListener('cierreCosechas', function(e) {
        Swal.fire({
            icon: 'success',
            title: 'Éxito, Cosecha cerrada...',
            text: '{{ Session::get('success') }}',
            timer: 5000,
            showConfirmButton: false
        });
    });
</script>
</form>
</div>
</div>
