<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creación de Plantaciones') }}
        </h2>
    </x-slot>
    <!-- Add Item Ml -->

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <form action="{{ route('Plantacion.store') }}" method="post">
                    @CSRF
                    <div class="px-3 md:lg:xl:px-10   border-t border-b py-5 bg-opacity-10"
                        style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
                        {{-- grid de fondo completo --}}
                        <div
                            class="grid xs:grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border p-1">

                            {{-- inicio --}}
                            <div
                                class="block m-3 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div
                                    class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                                    1.- Seleccione Propietario
                                </div>
                                <div class="p-6">
                                    <h5
                                        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                        <select data-te-select-init data-te-select-filter="true" id="empresa_id"
                                            name="empresa_id">

                                            <option class="text-secondary">Seleccione Propietario</option>
                                            @foreach ($empresas as $empresa)
                                                <option class="text-primary" value="{{ $empresa->id }}">
                                                    {{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </h5>
                                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                        Se debe seleccionar un propietario para desplegar los campos y cuarteles para
                                        azignar plantaciones
                                    </p>
                                </div>
                            </div>
                            {{-- fin --}}
                            {{-- inicio --}}
                            <div
                                class="block m-3 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-success-700">
                                <div
                                    class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                                    2.- Seleccione Campo
                                </div>
                                <div class="p-6">
                                    <h5
                                        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                        <select data-te-select-init data-te-select-filter="true" id="campo_id"
                                            name="campo_id">

                                        </select>
                                    </h5>
                                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                        Se debe seleccionar un propietario para desplegar los campos y cuarteles para
                                        azignar plantaciones
                                    </p>
                                </div>
                            </div>
                            {{-- fin --}}
                            {{-- inicio --}}
                            <div
                                class="block m-3 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-warning-700">
                                <div
                                    class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                                    3.- Seleccione Cuartel
                                </div>
                                <div class="p-6">
                                    <h5
                                        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                        <select data-te-select-init data-te-select-filter="true" id="cuartel_id"
                                            name="cuartel_id">

                                        </select>
                                    </h5>
                                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-50">
                                        Se debe seleccionar un propietario para desplegar los campos y cuarteles para
                                        azignar plantaciones
                                    </p>
                                </div>
                            </div>
                            {{-- fin --}}
                            {{-- informacion de la plantaciones --}}

                            <div class="rounded-lg xs:col-span-1 ml-3 p-4 bg-primary-600 md:col-span-3 mr-3">

                                <div class="">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-neutral-900">Detalle de
                                            la Plantación</h2>
                                        <p class="mt-1 text-sm leading-6 text-neutral-900">La plantación es la que
                                            localiza
                                            la que identifica las especies y periodos de cosecha.</p>

                                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                            <div class="sm:col-span-4">
                                                <label
                                                    class="block text-sm font-medium leading-6 text-neutral-900">Responsable</label>
                                                <div class="mt-2 text-neutral-900">

                                                    <select data-te-select-init data-te-select-filter="true"
                                                        name="contratista_id" class="text-neutral-800 " id="empresa_id">
                                                        <option value=""><label
                                                                class="block text-sm font-medium leading-6 text-neutral-900">Seleccione
                                                                Responsable</label>
                                                        </option>
                                                        @foreach ($administrador as $administrador)
                                                            <option value="{{ $administrador->id }}"><label
                                                                    class="block text-sm font-medium leading-6 text-neutral-900">{{ $administrador->name }}</label>
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-span-full">
                                                <label for="about"
                                                    class="block text-sm font-medium leading-6 text-neutral-50">Observaciones</label>
                                                <div class="mt-2">
                                                    <textarea id="about" name="observacion" rows="3"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                </div>
                                                <p class="mt-3 text-sm leading-6 text-neutral-50">Escriba aquí, mas
                                                    detalle de la plantación.</p>
                                            </div>
                                        </div>

                                        <div class="border-b border-gray-900/10 pb-12">
                                            <h2 class="text-base font-semibold leading-7 text-neutral-900">
                                                Caracteristicas de la Plantación
                                            </h2>
                                            <p class="mt-1 text-sm leading-6 text-neutral-900">Especie, Cantidad,
                                                Certificaciones.</p>

                                            <div class="mt-10 grid md:grid-cols-4 gap-x-2 sm:grid-cols-1">

                                                <div class="sm:col-span-1 md:col-span-2">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium leading-6 text-neutral-50">Especie
                                                    </label>
                                                    <div class="mt-2">
                                                        <select data-te-select-init data-te-select-filter="true"
                                                            name="especie_id" class="text-neutral-800 " id="especie_id">
                                                            <option value=""><label
                                                                    class="block text-sm font-medium leading-6 text-neutral-900">Seleccione
                                                                    Especie</label></option>
                                                            @foreach ($especies as $especie)
                                                                <option value="{{ $especie->id }}"><label
                                                                        for="username"
                                                                        class="block text-sm font-medium leading-6 text-neutral-900">Especie: {{ $especie->especie }}, Variedad: {{ $especie->variedad->variedad}}</label>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1 md:col-span-2">
                                                    <label for="last-name"
                                                        class="block text-sm font-medium leading-6 text-neutral-50">Variedad
                                                    </label>
                                                    <div class="mt-2">
                                                        <select data-te-select-init data-te-select-filter="true"
                                                            name="variedad_id" class="text-neutral-800 "
                                                            id="empresa_id">
                                                            <option value=""><label
                                                                    class="block text-sm font-medium leading-6 text-neutral-900">Seleccione
                                                                    Variedad</label></option>
                                                            @foreach ($variedades as $variedad)
                                                                <option value="{{ $variedad->id }}"><label
                                                                        for="username"
                                                                        class="block text-sm font-medium leading-6 text-neutral-900">{{ $variedad->variedad }}</label>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid sm:cols-1 md:grid-cols-4 gap-x-2">
                                                <div class="">
                                                    <label for="city"
                                                        class="block text-sm font-medium leading-6 text-neutral-50 ">Superficie
                                                        de Cuatel</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="superficiecuartel" id="superficiecuartel" disabled
                                                            
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="city"
                                                        class="block text-sm font-medium leading-6 text-neutral-50 ">Cantidad
                                                        de Plantas Máxima</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="cantidadPlantasDisabled" id="cantidadPlantasDisabled"
                                                             autocomplete="address-level2"
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                         <input type="hidden" name="cantidadPlantas" id="cantidadPlantas"
                                                             autocomplete="address-level2"
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                               
                                                <div class="">
                                                    <label for="region"
                                                        class=" block text-sm font-medium leading-6 text-neutral-50">Cantidad
                                                        Plantada
                                                    </label>
                                                    <div class="mt-2">
                                                        <input type="text" name="cantidadPlantada" id="cantidadPlantada"
                                                            autocomplete="address-level1"
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <label
                                                        class="block text-sm font-medium leading-6 text-neutral-50">Fecha
                                                        Plantación</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="fechaPlantacion"
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>
                                            </div>

                                           
                                        </div>

                                        <div class="mt-6 flex items-center justify-end gap-x-6">
                                            {{-- <button type="button"
                                        class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                                            <button type="submit"
                                                class="rounded-md bg-success-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-600">Guardar
                                                Plantación</button>
                                        </div>

                                    </div> {{--  fin --}}

                                    {{-- fin plantacion --}}
                                </div>

                            </div>
                        </div>
                </form>
            </div>
        </div>
</x-app-layout>
