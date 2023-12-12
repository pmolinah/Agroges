<div>
    <div class="grid grid-cols-12 gap-2 text-left">
        <div class="col-span-6  shadow-lg rounded-lg shadow-neutral-500">
            {{-- crud bodega nuevo --}}
            <div class="bg-white shadow rounded-lg">
                <div class="mb-4 flex items-center justify-between bg-neutral-200 p-1">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Configuracion Bodegas</h3>
                        {{-- <span class="text-base font-normal text-gray-500">Cree Bodegas, Espacios acopio de
                            Items</span> --}}
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="bg-gray-700 text-white  py-2 px-4 rounded hover:bg-gray-600"
                            data-te-toggle="modal" data-te-target="#exampleModalCenterBodega" data-te-ripple-init
                            data-te-ripple-color="light">
                            Nueva Bodega
                        </button>
                        <input type="text" wire:model="search" class="h-10 border mt-1 rounded px-4 bg-gray-50"
                            id="exampleFormControlInput1" placeholder="Buscar" />
                    </div>
                </div>
                <div class="flex flex-col mt-2">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg p-1">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Bodega
                                            </th>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ubicacion
                                            </th>
                                            <th scope="col"
                                                class="text-center p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($bodegas as $Bodega)
                                            <tr class="border-b dark:border-neutral-500 hover:bg-neutral-100">

                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->bodega }}</td>
                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->campo->campo }}</td>
                                                {{-- <td class="whitespace-nowrap">{{ $Bodega->encargado_id }}</td> --}}
                                                {{-- <td
                                                    class="whitespace-nowrap hidden sm:hidden md:block xl:block  px-6 py-11">
                                                    {{ $Bodega->observacion }}</td> --}}

                                                <td
                                                    class="text-center p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    <a href="#" wire:click="EliminarBodega({{ $Bodega->id }})">
                                                        <i class="far fa-trash"></i> </a>
                                                    <a href="#" wire:click="EditarBodega({{ $Bodega }})">
                                                        <i class="far fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-1">
                                    {{ $bodegas->links('pagination::tailwind') }}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- fin --}}
        </div>
        <div class="col-span-6  shadow-lg rounded-lg shadow-neutral-500">
            {{-- crud bodega nuevo --}}
            <div class="bg-white shadow rounded-lg">
                <div class="mb-4 flex items-center justify-between bg-neutral-200 p-1">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Configuracion Items</h3>
                        {{-- <span class="text-base font-normal text-gray-500">Cree Bodegas, Espacios acopio de
                            Items</span> --}}
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="bg-gray-700 text-white  py-2 px-4 rounded hover:bg-gray-600"
                            data-te-toggle="modal" data-te-target="#exampleModalCenterBodega" data-te-ripple-init
                            data-te-ripple-color="light">
                            Nueva Item
                        </button>
                        <input type="text" wire:model="search" class="h-10 border mt-1 rounded px-4 bg-gray-50"
                            id="exampleFormControlInput1" placeholder="Buscar" />
                    </div>
                </div>
                <div class="flex flex-col mt-2">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg p-1">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Bodega
                                            </th>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ubicacion
                                            </th>
                                            <th scope="col"
                                                class="text-center p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($bodegas as $Bodega)
                                            <tr class="border-b dark:border-neutral-500 hover:bg-neutral-100">

                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->bodega }}</td>
                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->campo->campo }}</td>
                                                {{-- <td class="whitespace-nowrap">{{ $Bodega->encargado_id }}</td> --}}
                                                {{-- <td
                                                    class="whitespace-nowrap hidden sm:hidden md:block xl:block  px-6 py-11">
                                                    {{ $Bodega->observacion }}</td> --}}

                                                <td
                                                    class="text-center p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    <a href="#" wire:click="EliminarBodega({{ $Bodega->id }})">
                                                        <i class="far fa-trash"></i> </a>
                                                    <a href="#" wire:click="EditarBodega({{ $Bodega }})">
                                                        <i class="far fa-edit"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-1">
                                    {{ $bodegas->links('pagination::tailwind') }}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- fin --}}
        </div>
        <div class="col-span-12 mt-5 shadow-lg rounded-lg shadow-neutral-500">
            {{-- crud bodega nuevo --}}
            <div class="bg-white shadow rounded-lg">
                <div class="mb-4 flex items-center justify-between bg-neutral-200 p-1">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Inventario</h3>
                        {{-- <span class="text-base font-normal text-gray-500">Cree Bodegas, Espacios acopio de
                            Items</span> --}}
                    </div>
                    <div class="flex-shrink-0">
                        {{-- <button type="button" class="bg-gray-700 text-white  py-2 px-4 rounded hover:bg-gray-600"
                            data-te-toggle="modal" data-te-target="#exampleModalCenterBodega" data-te-ripple-init
                            data-te-ripple-color="light">
                            Nueva Bodega
                        </button> --}}
                        <input type="text" wire:model="search" class="h-10 border mt-1 rounded px-4 bg-gray-50"
                            id="exampleFormControlInput1" placeholder="Buscar" />
                    </div>
                </div>
                <div class="flex flex-col mt-2">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg p-1">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Bodega
                                            </th>
                                            <th scope="col"
                                                class="p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ubicacion
                                            </th>
                                            <th scope="col"
                                                class="text-center p-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($bodegas as $Bodega)
                                            <tr class="border-b dark:border-neutral-500 hover:bg-neutral-100">

                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->bodega }}</td>
                                                <td class="p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $Bodega->campo->campo }}</td>
                                                {{-- <td class="whitespace-nowrap">{{ $Bodega->encargado_id }}</td> --}}
                                                {{-- <td
                                                    class="whitespace-nowrap hidden sm:hidden md:block xl:block  px-6 py-11">
                                                    {{ $Bodega->observacion }}</td> --}}

                                                <td
                                                    class="text-center p-1 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    <a href="#"
                                                        wire:click="EliminarBodega({{ $Bodega->id }})">
                                                        <i class="far fa-trash"></i> </a>
                                                    <a href="#" wire:click="EditarBodega({{ $Bodega }})">
                                                        <i class="far fa-edit"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-1">
                                    {{ $bodegas->links('pagination::tailwind') }}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- fin --}}
        </div>
    </div>
    <div>
        {{-- caja creacion --}}

        <div class="space-y-2">
            <!-- Button trigger vertically centered modal-->
            <div class="grid sm:grid-cols-1 md:grid-cols-3 borde-neutral-800">


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

                                    Nueva Bodega
                                </h5>
                                <!--Close button-->
                                <button type="button"
                                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                    data-te-modal-dismiss aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!--Modal body-->
                            <div class="relative p-4 text-neutral-50">
                                Bodega
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <input type="text" wire:model.defer="bodega"
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
                                        wire:model.defer='encargado_id'>

                                        <option class="text-secondary" value=" ">Seleccione Encargado.</option>
                                        @foreach ($encargados as $encargado)
                                            <option class="text-primary" value="{{ $encargado->id }}">
                                                {{ $encargado->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="relative p-4 text-neutral-50">
                                Observación
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <textarea wire:model.defer="observacion"
                                        class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        rows="3"></textarea>

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
                                <button type="button" wire:click="GuardarBodega"
                                    class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                    data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                                    Guardar Bodega
                                </button>
                            </div>
                        </div>
                    </div>
                </div>




                <!--Modal title-->
                <x-modal wire:model="open_editBodega" @click.away="false">
                    <h5
                        class=" p-3 text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200 dark:bg-info-900">

                        Edición de Bodega
                    </h5>
                    <hr class=" h-0.5 border-t-0 bg-neutral-50 opacity-100 dark:opacity-500" />
                    <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                        Bodega <input type="hidden" wire:model.defer="edit_idBodega">
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input type="text" wire:model.defer="bodega"
                                class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                        </div>
                    </div>

                    <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                        Campo Actual
                        <select wire:change="SelectEmpresaxCampo" wire:model="empresa_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">


                            <option class="text-secondary" value=" ">Seleccione Propietario.</option>
                            @foreach ($empresas as $empresa)
                                <option class="text-primary" value="{{ $empresa->id }}">
                                    {{ $empresa->razon_social }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                        Campo Actual
                        <select wire:model.defer="campo_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">

                            <option class="text-neutral-900" value="{{ $campoId }}">{{ $campo_nombre }}
                            </option>
                            @foreach ($campos as $campo)
                                <option class="text-primary" value="{{ $campo->id }}">{{ $campo->campo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative p-4 text-neutral-50 dark:bg-info-900">
                        Observacion <input type="hidden" wire:model.defer="observacion">
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input type="text" wire:model.defer="bodega"
                                class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                        </div>
                    </div>


                    <div class="relative p-4 bg-info-900">

                    </div>


                    <hr class=" h-0.5 border-t-0 bg-neutral-50 opacity-100 dark:opacity-500" />
                    <div class="dark:bg-info-900 p-3">
                        <button type="button" wire:click="ActualizarBodega"
                            class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                            Actualizar Bodega
                        </button>
                        <button type="button" wire:click="Limpiar"
                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                            Cerrar
                        </button>
                    </div>


                </x-modal>
                {{-- modal --}}

                <script>
                    window.addEventListener('Guardar', function(e) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito, Registro Guardado...',
                            text: '{{ Session::get('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    });
                    window.addEventListener('Eliminar', function(e) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Éxito, Registro Eliminado...',
                            text: '{{ Session::get('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    });
                    window.addEventListener('Actualizar', function(e) {
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

        </div>
    </div>
