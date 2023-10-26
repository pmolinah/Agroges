<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planificacións de Cosecha') }}
        </h2>
    </x-slot>
    <!-- Add Item Ml -->

    <div class="py-5">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <div class="px-1 md:lg:xl:px-5   border-t border-b py-10 bg-opacity-10"
                    style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
                <form action="{{route('Planificacion.store')}}" method="post">
                @CSRF
                    <div class="grid sm:grid-cols-1 md:grid-cols-12 shadow-xl">{{-- inicio 12 espacios --}}

                        <div class="sm:col-span-1 md:col-span-12 bg-neutral-100">
                            <h1 class="text-center mb-2 mt-0 text-5xl font-medium leading-tight text-primary">
                                Planificación de Cosechas
                            </h1>
                        </div>

                        <div
                            class="sm:col-span-1 md:col-span-6 grid sm:grid-cols-1 md:grid-cols-6 p-2 sticky top-0 bg-neutral-100 mt-2 shadow-xl">
                            <div class="sm:span-col-1 md:col-span-6">
                                <h3
                                    class="sm:col-span-1 md:col-span-6 text-center mb-2 mt-0 text-3xl font-medium leading-tight text-primary">
                                    Datos de la Cosecha
                                </h3>
                            </div>
                            {{-- <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2">
                                Seleccione Responsable
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50">
                                <select data-te-select-init data-te-select-filter="true">
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Seleccione Propietario
                            </div>

                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <select data-te-select-init data-te-select-filter="true" id="empresaPlan_id"
                                    name="empresa_id">
                                    <option class="text-secondary">1.- Seleccione Propietario</option>
                                    @foreach ($empresasC as $empresa)
                                        <option class="text-primary" value="{{ $empresa->id }}">
                                            {{ $empresa->razon_social }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Seleccione Campo
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <select data-te-select-init data-te-select-filter="true" id="campoPlan_id"
                                    name="campo_id">
                                    <option value="0" class="text-secondary">2.- Seleccione Campo</option>
                                </select>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Seleccione Cuartel
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <select data-te-select-init data-te-select-filter="true" id="cuartelPlan_id"
                                    name="cuartel_id">
                                    <option class="text-secondary">3.- Seleccione Cuartel</option>
                                </select>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Especie
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="especie_id" />
                                    <input type="hidden" id="plantacion_id" name="plantacion_id">
                                    
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Variedad
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="variedad" />
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Cantidad Maxima en Cuartel
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="CantidadMaxima" />
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Cantidad Plantada
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="CantidadPlantada" />
                            </div>

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Fecha Inicio
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="date" name="fechai"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    />

                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Fecha Final
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="date" name="fechaf"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                   />

                            </div>

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Tipo de Envases
                            </div>

                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <select data-te-select-init data-te-select-filter="true" id="envase_id"
                                    name="envase_id">
                                    <option class="text-secondary">1.- Seleccione Tipo de Envase</option>
                                    @foreach ($envases as $envase)
                                        <option class="text-primary" value="{{ $envase->id }}">
                                            {{ $envase->envase }}, Kilos:{{ $envase->capacidad }},
                                            Tara:{{ $envase->tara }} </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Stock de Campo
                            </div>

                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text" id="stock" disabled
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    />


                            </div>

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Administrador de Campo
                            </div>

                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="Administrador" />


                            </div>

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Capataz Cuartel
                            </div>

                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 text-neutral-50 mt-2">
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="Capataz" />

                            </div>

                        </div>

                        {{-- segunda columna --}}

                        <div
                            class="sm:col-span-1 md:col-span-6 grid sm:grid-cols-1 md:grid-cols-6 bg-neutral-100 mt-2 shadow-xl">
                            <div class="sm:col-span-1 md:col-span-6 bg-neutral-100">
                                <h3 class="text-center mb-2 mt-0 text-3xl font-medium leading-tight text-primary">
                                    Datos de Exportadora
                                </h3>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Nombre Exportadora
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 p-2 mt-2">
                                    
                                <select data-te-select-init data-te-select-filter="true" id="exportadora_id"
                                    name="empresa_id">
                                    <option class="text-secondary">Seleccione Empresa Exportadora</option>
                                    @foreach ($empresas as $empresa)
                                        <option class="text-primary" value="{{ $empresa->id }}">
                                            {{ $empresa->razon_social }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Kilos Solicitados
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 p-2 mt-2">
                                <input type="number" id="nuevoskilos" name="nuevoskilos"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            </div>
                            <div class="sm:col-span-1 text-center p-2 md:col-span-6">
                                <button type="button" id="Agregar"
                                    class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                    Añadir Exportadora
                                </button>
                            </div>
                            <div class="sm:col-span-1 text-center p-2 md:col-span-3">
                                <h3 class="text-3xl text-danger-600 font-medium leading-tight">
                                    Kilos Totales
                                </h3>
                            </div>
                            <div class="sm:col-span-1 text-center p-2 md:col-span-3">
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <input type="number" name="totalkilos"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-800 dark:placeholder:text-neutral-800 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="totadekilos" />

                                </div>

                            </div>

                            <div class="sm:col-span-1 md:col-span-6 bg-neutral-200 p-2 mt-2">
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full text-left text-sm font-light" id="grilla">
                                                    <thead
                                                        class="border-b bg-white text-neutral-50 font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-4 text-center hidden sm:hidden md:block xl:block">
                                                                id</th>
                                                            <th scope="col" class="px-6 py-4">Exportadora</th>
                                                            <th scope="col" class="px-6 py-4">Kilos</th>
                                                            <th scope="col" class="px-6 py-4">Stock/Bins</th>
                                                            <th scope="col" class="px-6 py-4">Eliminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-warning-200">


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-1 md:col-span-6 bg-neutral-100">
                                <h3 class="text-center mb-2 mt-0 text-3xl font-medium leading-tight text-primary">
                                    Datos de Contratista
                                </h3>
                            </div>

                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Contratista
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 p-2 mt-2">
                                <select data-te-select-init data-te-select-filter="true" id="contratista_id"
                                    name="empresa_id">
                                    <option class="text-secondary">Seleccione Empresa Contratista</option>
                                    @foreach ($empresasE as $empresa)
                                        <option class="text-primary" value="{{ $empresa->id }}">
                                            {{ $empresa->razon_social }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="sm:col-span-1 md:col-span-2 bg-danger-100 p-2 mt-2">
                                Trato x Cosecha
                            </div>
                            <div class="sm:col-span-1 md:col-span-4 bg-neutral-600 p-2 mt-2">
                                <input type="number" id="tratoxcosecha" name="tratoxcosecha"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            </div>

                            <div class="sm:col-span-1 text-center p-2 md:col-span-6">
                                <button type="button" id="AgregarContratista"
                                    class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                    Añadir Contratista
                                </button>
                                <div>

                                    <div class="sm:col-span-1 md:col-span-6 bg-neutral-200 p-2 mt-2">
                                        <div class="flex flex-col">
                                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                                    <div class="overflow-hidden">
                                                        <table class="min-w-full text-left text-sm font-light"
                                                            id="grilla2">
                                                            <thead
                                                                class="border-b bg-white text-neutral-50 font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                                                <tr>
                                                                    <th scope="col" class="px-6 py-4">id</th>

                                                                    <th scope="col" class="px-6 py-4">Contratista
                                                                    </th>
                                                                     <th scope="col" class="px-6 py-4">TratoxCosecha
                                                                    </th>

                                                                    <th scope="col" class="px-6 py-4">Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-warning-200">

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                    </div> {{-- fin 12 espacios --}}
                </form>

                        </div>
                        <div class="text-center sm:span-col-1 md:col-span-6 m-5">
                            <button type="button"
                                class="inline-block rounded bg-danger-900 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                Limpiar Formulario
                            </button>
                        </div>
                        <div class="text-center sm:span-col-1 md:col-span-6 m-5">
                            <button type="submit"
                                class="inline-block rounded bg-success-900 px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                Guardar Planificación
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
