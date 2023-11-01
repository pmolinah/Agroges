<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administración de Vehículos') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto w-5/5 p-3 px-3 overflow-hidden">
                      
                            <button type="button"
                                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                                data-te-ripple-init data-te-ripple-color="light">
                                Nuevo Vehículo
                            </button>
                            <!-- @can('Admin.Usuario.Nuevo')
    -->
                                <!--
@endcan -->
               
                        <!-- tabla Usuarios -->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-left text-sm font-light">
                                            <thead
                                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-500">
                                                <tr class="font-light">
                                                    <th scope="col" class="px-6 py-4">
                                                        <p class="text-neutral-800">#</p>
                                                    </th>
                                                    <th scope="col" class="px-6 py-4">Empresa</th>
                                                    <th scope="col" class="px-6 py-4">Patente</th>
                                                    <th scope="col" class="px-6 py-4">Conductor</th>
                                                    <th scope="col" class="px-6 py-4">Editar</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr
                                                    class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-200">
                                                    @foreach ($vehiculos as $vehiculo)
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $vehiculo->id }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            {{ $vehiculo->empresa_id }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $vehiculo->patente }}
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            {{ $vehiculo->conductor_id }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            <button type="button"
                                                                class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]">
                                                                <a href="" class="btn btn-sm btn-warning"><i
                                                                        class="fas fa-edit"></i>Editar </a>
                                                            </button>
                                                    @endforeach
                                                    </td>
                                                    {{-- <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-700 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                    Inhabilitar
                                                </button>
                                            </td> --}}
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabla usuarios -->
                    </div>
                </div>
                {{-- modal --}}
                <!--Verically centered scrollable modal-->
                <div data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="exampleModalCenteredScrollable" tabindex="-1"
                    aria-labelledby="exampleModalCenteredScrollableLabel" aria-modal="true" role="dialog">
                    <div data-te-modal-dialog-ref
                        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                        <div
                            class="pointer-events-auto relative flex w-full flex-col rounded-md border-solid border-2 border-sky-500 bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-100 ">
                            <div
                                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <!--Modal title-->
                                <h5 class="text-xl font-medium leading-normal text-neutral-800 "
                                    id="exampleModalCenteredScrollableLabel">
                                    Ingreso de Vehículos
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
                            <div class="grid grid-cols-8 p-3">
                                <div class="col-span-8 ml-2">
                                    <label>Patente, sin puntos ni guión</label>
                                </div>
                                <div class="col-span-8 ml-2">
                                    <input type="text" class="border-dotted border-2 border-sky-500" wire:model.defer="patente">
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <label>Empresa</label>
                                </div>
                                <div class="col-span-8 ml-2">
                                     <select wire:model.defer="exportadorxplanificacionID" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                        @foreach ($empresas as $empresa)
                                      
                                                    <option value="{{ $empresa->id}}">{{ $empresa->razon_social }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <label>Conductor</label>
                                </div>
                                <div class="col-span-8 ml-2">
                                     <select wire:model.defer="exportadorxplanificacionID" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                        @foreach ($conductores as $conductor)
                                      
                                                    <option value="{{ $conductor->id}}">{{ $conductor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-8 ml-2">
                                    <label>Marca</label>
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <input type="text" class=" w-full mr-5 border-dotted border-2 border-sky-500" wire:model.defer="marca">
                                </div>
                                  <div class="col-span-8 ml-2">
                                    <label>Año</label>
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <input type="text" class="mr-5 border-dotted border-2 border-sky-500" wire:model.defer="anio">
                                </div>
                                <div class="col-span-8 ml-2">
                                    <label>Color</label>
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <input type="text" class=" w-full mr-5 border-dotted border-2 border-sky-500" wire:model.defer="marca">
                                </div>
                                 <div class="col-span-8 ml-2">
                                    <label>Tipo Vehívulo</label>
                                </div>
                                 <div class="col-span-8 ml-2">
                                     <select wire:model.defer="exportadorxplanificacionID" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value=""></option>
                                       <option value="1">Automovil</option>
                                       <option value="2">Camión</option>
                                       <option value="3">Carro</option>
                                       <option value="4">Rampla</option>
                                    </select>
                                </div>
                               
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <button type="button"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                    Cerrar
                                </button>
                                <button type="button"
                                    class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                    data-te-ripple-init data-te-ripple-color="light">
                                    Guardar Vehículo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal --}}
            </div>
        </div>
    </x-app-layout>
</div>
