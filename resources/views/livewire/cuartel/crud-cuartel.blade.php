<div>

    <div class="grid sm:grid-cols-1 md:grid-cols-5">

        <div class="sm:col-span-1 md:col-span-2 mt-4 bg-neutral-600 p-4">
            <select wire:model.defer="empresaID" wire:change="SeleccionEmpresa" class="p-2">
                <option>Seleccione Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razon_social }}</option>
                @endforeach
                <select>
        </div>

        <div class="sm:col-span-1 md:col-span-2 mt-4  bg-neutral-600 p-4">

            <select wire:model.defer="campoID" wire:change="SeleccionCampo" class="p-2">
                <option>Seleccione Campo</option>
                @foreach ($campos as $campo)
                    <option value="{{ $campo->id }}">{{ $campo->campo }}</option>
                @endforeach
                <select>
        </div>

        <div class="grid sm:grid-cols-1 md:grid-cols-1 borde-neutral-800 mt-4">

            <button type="button"
                class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                data-te-toggle="modal" data-te-target="#exampleModalCenterBodega" data-te-ripple-init
                data-te-ripple-color="light">
                Agregar Nuevo Cuartel
            </button>
        </div>

        {{-- caja creacion --}}

        <div class="space-y-2">
            <!-- Button trigger vertically centered modal-->



            <!--Verically centered modal-->
            <div data-te-modal-init
                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                data-te-backdrop="static" data-te-keyboard="false" id="exampleModalCenterBodega" tabindex="-1"
                aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                    <div
                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-info-900">
                        <div
                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <!--Modal title-->
                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">

                                Nuevo Cuartel
                            </h5>
                            <!--Close button-->
                            <button type="button"
                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                data-te-modal-dismiss aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!--Modal body-->
                        <div class="relative p-4 text-neutral-50">
                            Cuartel
                            <div class="relative mb-3" data-te-input-wrapper-init>
                                <input type="text" wire:model.defer="observaciones"
                                    class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                            </div>
                        </div>
                        <div class="relative p-4 text-neutral-50">
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="empresa_id" name="empresa_id">

                                <option class="text-neutral-900">Seleccione Propietario</option>
                                @foreach ($empresas as $empresa)
                                    <option class="text-primary" value="{{ $empresa->id }}">
                                        {{ $empresa->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative p-4 text-neutral-900">
                            <select
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                id="campo_id" name="campo_id" wire:model.defer="campo_id">


                            </select>
                        </div>
                        <div class="relative p-4 text-neutral-90">
                            <div class="bg-info-900 w-full">

                                <select
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                    wire:model.defer='capataz_id'>

                                    <option class="text-secondary" value=" ">Seleccione Capataz.</option>
                                    @foreach ($capataz as $capataz)
                                        <option class="text-secondary" value="{{ $capataz->id }}">{{ $capataz->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="relative p-4 text-neutral-50">
                            Superfice
                            <div class="relative mb-3" data-te-input-wrapper-init>
                                <input type="text" wire:model.defer="superficie"
                                    class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                            </div>
                        </div>
                        <div class="relative p-4 text-neutral-50">
                            Certificado
                            <div class="relative mb-3" data-te-input-wrapper-init>
                                <input type="text" wire:model.defer="certificado"
                                    class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                            </div>
                        </div>


                        <!--Modal footer-->
                        <div
                            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <button type="button" wire:click="Limpiar"
                                class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                Cerrar
                            </button>
                            <button type="button" wire:click="GuardarCuartel"
                                class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                                Guardar Cuartel
                            </button>
                        </div>
                    </div>
                </div>
            </div>




            <!--Modal title-->
            <x-modal wire:model="open_editCuartel">
                <h5
                    class=" p-3 text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200 dark:bg-info-900">

                    Edición de Cuartel {{$cuartel_id}}
                </h5>
                <hr class=" h-0.5 border-t-0 bg-neutral-50 opacity-100 dark:opacity-500" />
                <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                    Cuartel <input type="hidden" wire:model.defer="cuartel_id">
                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <input type="text" wire:model.defer="observaciones"
                            class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                    </div>
                </div>

                <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                    Capataz Actual
                    <select wire:model.defer="capatazID"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">

                            <option class="text-primary" value="{{ $capatazID }}">{{ $capatazNombre }} , {{ $capatazID }}  </option>
                        @foreach ($capatazEncargado as $capatazEncargado)
                            <option class="text-primary" value="{{ $capatazEncargado->id }}">{{ $capatazEncargado->name }} ,{{ $capatazEncargado->id }},{{$capataz_id}}</option>
                         
                        @endforeach
                    </select>
                </div>
                <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                    Campo Actual
                    <select wire:model.defer="campoID"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option class="text-primary" value="{{ $campoID }}">{{ $campoNombre }}  , {{ $campoID }} </option>
                        @foreach ($campos as $campo)
                            <option class="text-primary" value="{{ $campo->id }}">{{ $campo->campo }}   </option>
                        @endforeach

                    </select>
                </div>
                   <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                    superficie 
                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <input type="text" wire:model.defer="superficie"
                            class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                    </div>
                    
                </div>
                 <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                    Certificado <input type="hidden">
                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <input type="text" wire:model.defer="certificado"
                            class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                    </div>
                    
                </div>
              
                <div class="relative p-4 bg-info-900">

                </div>


                <hr class=" h-0.5 border-t-0 bg-neutral-50 opacity-100 dark:opacity-500" />
                <div class="dark:bg-info-900 p-3">
                    <button type="button" wire:click="ActualizarCuartel({{ $cuartel_id }})"
                        class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                        Actualizar Cuartel
                    </button>
                    <button type="button" wire:click="cerrar"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                        Cerrar
                    </button>
                </div>


            </x-modal>

        </div>


        {{-- fin modal nuevo cuartel --}}


        <div class="sm:col-span-1 md:col-span-5 p-4">
            <div class="p-4 bg-neutral-100 shadow-xl">
                <table class="items-center  w-full  border border-gray-300">
                    <thead class="bg-neutral-200">
                        <tr> 
                            <th class="p-2 border border-gray-400">Propietario</th>
                            <th class="p-2 border border-gray-400">Campo</th>
                            <th class="p-2  border border-gray-400">Cuartel</th>
                            <th class="p-2 border border-gray-400">Capataz</th>
                            <th class="p-2 border border-gray-400">Superficie</th>
                            <th class="p-2 border border-gray-400">Certificado</th>
                            <th class="p-2  border border-gray-400">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="border  border-gray-300">
                        @foreach ($cuarteles as $cuartel)
                            <tr class="bg-primary-50 p-2 rounded hover:bg-sky-100 rounded-lg mb-2 mt-0 text-base font-medium leading-tight text-primary shadow-md ">
                                <input type="hidden" wire:model.defer="campoID" value="{{ $cuartel->campo_id}}">
                                 <td class="p-2 border border-gray-400 ">{{ $cuartel->campo->empresa->razon_social }}
                                <td class="p-2 border border-gray-400 ">{{ $cuartel->campo->campo }}
                                </td>
                                <td class="p-2 border border-gray-400 ">
                                    {{ $cuartel->observaciones }}</td>
                                <td class="p-2 border border-gray-400 ">{{ $cuartel->capataz->name }}
                                <td class="p-2 border border-gray-400 ">{{ $cuartel->superficie }}</td>
                                <td class="p-2 border border-gray-400 ">{{ $cuartel->certificado }}
                                <td class="p-2 border border-gray-400 ">
                                    <div class="grid grid-cols-2 text-center ">
                                        <div class="text-danger-900"><button type="button" wire:click="EliminarCuartel({{ $cuartel->id }})"
                                                class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                                <i class="fa-solid fa-trash"></i>
                                            </button></div>
                                        <div class="text-danger-900"><button type="button" wire:click="EditarCuartel({{$cuartel->id}})"
                                                class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </diV>
    </div>

    {{-- modal --}}

    <script>
        window.addEventListener('GuardarCuartel', function(e) {
            Swal.fire({
                icon: 'success',
                title: 'Éxito, Registro Guardado...',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        });
        window.addEventListener('EliminarCuartel', function(e) {
            Swal.fire({
                icon: 'warning',
                title: 'Éxito, Registro Eliminado...',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        });
        window.addEventListener('ActualizarCuartel', function(e) {
            Swal.fire({
                icon: 'success',
                title: 'Éxito, Registro Actualizado...',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        });
    </script>
    {{-- fin caja --}}
</div>
