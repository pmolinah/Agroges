<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administración de Cuentas Corrientes de envases a Campos y Exportadoras') }}
        </h2>

    </x-slot>
    <!-- Add Item Ml -->

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <div class="px-3 md:lg:xl:px-10  border-t border-b py-20 bg-opacity-10"
                    style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
                    <!--Tabs navigation-->
                    <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                        <li role="presentation" class="flex-auto text-center">
                            <a href="#tabs-home01"
                                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                data-te-toggle="pill" data-te-target="#tabs-home01" data-te-nav-active role="tab"
                                aria-controls="tabs-home01" aria-selected="true">Envases Exportadora</a>
                        </li>
                        <li role="presentation" class="flex-auto text-center">
                            <a href="#tabs-profile01"
                                class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                data-te-toggle="pill" data-te-target="#tabs-profile01" role="tab"
                                aria-controls="tabs-profile01" aria-selected="false">Envase Campo</a>
                        </li>

                    </ul>

                    <!--Tabs content-->
                    <div class="mb-6">
                        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-home01" role="tabpanel" aria-labelledby="tabs-home-tab01" data-te-tab-active>
                            {{-- @livewire('cuenta-corriente.index') --}}
                            <div class="grid sm:grid-cols-1 md:grid-cols-2">
                                <div class="p-5 shadow-2xl ml-1 mr-5  border-dotted border-2 border-sky-500">
                                    {{-- inicio form --}}

                                    <form action="{{ route('cuentacorriente.store') }}" method="post">
                                        @CSRF
                                        <div class="space-y-12">
                                            <div class="border-b border-gray-900/10 pb-12">
                                                <h2 class="text-base font-semibold leading-7 text-gray-900">Asignación
                                                    de Envases a Exportadoras</h2>
                                                <p class="mt-1 text-sm leading-6 text-gray-600">Ingreso de Stock de
                                                    Envases por tipo.</p>

                                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                    {{-- nuevo empresa y campo --}}
                                                        <div class="col-span-6">
                                                    <label for="country"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Empresa
                                                        Principal.</label>
                                                    <div class="mt-2">

                                                        <h5
                                                            class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">

                                                            <select id="empresa_idDos" name="empresa_id"
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                                <option>Seleccione Propietario</option>
                                                                @foreach ($empresas as $empresa)
                                                                    <option class="text-neutral-900"
                                                                        value="{{ $empresa->id }}">
                                                                        {{ $empresa->razon_social }}</option>
                                                                @endforeach
                                                            </select>
                                                        </h5>


                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <label for="country"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Campo</label>
                                                    <select id="campo_idDos" name="campo_id"
                                                        wire:model.defer="campo_id" wire:change="cambioCampo"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">

                                                    </select>
                                                </div>
                                                    {{-- fin nuevo  --}}
                                                    <div class="col-span-6">
                                                        <label for="country"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Exportadora.</label>
                                                        <div class="mt-2">
                                                            <select id="exportadora_id" name="exportadora_id" required
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                                <option value=""></option>
                                                                @foreach ($exportadoras as $exportadora)
                                                                    <option value="{{ $exportadora->id }}">
                                                                        {{ $exportadora->razon_social }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="country"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Envase.</label>
                                                        <div class="mt-2">
                                                            <select id="country" name="envase_id" required
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                                <option value=""></option>
                                                                @foreach ($envase as $envase)
                                                                    <option value="{{ $envase->id }}">
                                                                        {{ $envase->envase }}, Carga:
                                                                        {{ $envase->capacidad }}K, Tara:
                                                                        {{ $envase->tara }}K</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="sm:col-span-3">
                                                        <label for="first-name"
                                                            class="block text-sm font-medium leading-6 text-gray-900">Saldo
                                                            Inicial del Envase y desgloce
                                                        </label>
                                                        <div class="mt-2 ">
                                                            <input type="text" name="saldo" value=0 required
                                                                id="saldoInicial" disabled
                                                                class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-3">

                                                    </div>
                                                    {{-- desgloce envases --}}
                                                    <label for="first-name"
                                                        class="block text-sm font-medium leading-6 mt-1 text-gray-900">Cantidad</label>
                                                    <input type="text" id="cantidadColor"
                                                        onkeypress="return soloNumeros(event)"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <select id="color_id"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                        <option>Seleccionar Color</option>
                                                        @foreach ($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }}
                                                            </option>
                                                        @endforeach
                                                        <select>
                                                            <button id="btnsumarenvase" type="button"
                                                                class="rounded-md bg-indigo-600 w-full px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar
                                                            </button>
                                                            <div class="col-span-6">
                                                                <table class="w-full text-center text-sm font-light"
                                                                    id="grillaColor">
                                                                    <thead
                                                                        class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                                                        <tr>
                                                                            <th scope="col" class=" px-2 py-2">
                                                                                Cantidad</th>
                                                                            <th scope="col" class=" px-2 py-2">Color
                                                                            </th>
                                                                            <td class="whitespace-nowrap  px-2 py-2">
                                                                                Quitar</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            {{-- fin desgloce --}}


                                                            <div class="col-span-full">
                                                                <label for="about"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                                                                <div class="mt-2">
                                                                    <textarea id="about" name="observacion" rows="3"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                                </div>
                                                                <p class="mt-3 text-sm leading-6 text-gray-600">Máximo
                                                                    100 Carácteres.
                                                                </p>
                                                            </div>


                                                </div>
                                            </div>


                                        </div>

                                        <div class="mt-6 flex items-center justify-end gap-x-6">
                                            {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                                            <button type="submit"
                                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar
                                                Envases a Cuenta Corriente de la Exportadora.</button>
                                        </div>


                                        {{-- fin form --}}


                                </div>
                                <div class="border-solid border-2 border-neutral-900 shadow-2xl">


                                    <table class="w-full text-center text-sm font-light">
                                        <thead
                                            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                            <tr>
                                                <th scope="col" class=" px-6 py-4">Campo</th>
                                                <th scope="col" class=" px-6 py-4">Exportadora</th>
                                                <th scope="col" class=" px-6 py-4">Tipo Envase</th>
                                                <th scope="col" class=" px-6 py-4">Detalle</th>
                                                <th scope="col" class=" px-6 py-4">Stock</th>
                                                {{-- <th scope="col" class=" px-6 py-4">Elimitar</th> --}}
                                                {{-- <th scope="col" class=" px-6 py-4">Editar</th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cuentaenvases as $cuentaenvase)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $cuentaenvase->campo->campo }}</td>
                                                    <td class="whitespace-nowrap  px-6 py-4">
                                                        {{ $cuentaenvase->empresa->razon_social }}</td>
                                                    <td class="whitespace-nowrap  px-6 py-4">
                                                        {{ $cuentaenvase->envase->envase }}</td>

                                                    <td class="px-6 py-4 border-solid border-2 border-sky-500">
                                                            <table class="w-full border-solid border-2 border-sky-500">
                                                                <thead>
                                                                    <tr class="border-solid border-2 border-sky-500">
                                                                        <th class="border-solid border-2 border-sky-500">Color</th>
                                                                        <th class="border-solid border-2 border-sky-500">Cantidad</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($cuentaenvase->detallecuentaenvase as $desgloseEnvase )
                                                                        <tr class="border-solid border-2 border-sky-500">
                                                                            <th class="border-solid border-2 border-sky-500">{{$desgloseEnvase->color->color}}</th>
                                                                            <th class="border-solid border-2 border-sky-500">{{$desgloseEnvase->stock}}</th>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                    </td>   
                                                    <td class="whitespace-nowrap  px-6 py-4">
                                                        {{ $cuentaenvase->saldo }}</td>


                                                    {{-- <td class="whitespace-nowrap  px-6 py-4">
                                                        <center><button type="button" id="btnEliminar"
                                                                data-valor="{{ $cuentaenvase->id }}"
                                                                class="mb-1 inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </center>
                                                    </td> --}}

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                </form>

                            </div>
                            <script>
                                function soloNumeros(event) {
                                    const tecla = event.key;
                                    const esNumero = /^[0-9]+$/.test(tecla);

                                    if (!esNumero) {
                                        event.preventDefault(); // Evita la entrada de caracteres no numéricos.
                                    }
                                }
                            </script>
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
                                window.addEventListener('EliminarCuenta', function(e) {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Éxito, Registro Eliminado...',
                                        text: '{{ Session::get('success') }}',
                                        timer: 5000,
                                        showConfirmButton: false
                                    });
                                });
                                window.addEventListener('ActualizarCuenta', function(e) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Éxito, Registro Actualizado...',
                                        text: '{{ Session::get('success') }}',
                                        timer: 5000,
                                        showConfirmButton: false
                                    });
                                });
                            </script>

                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-profile01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                            {{-- cuenta corriente de Campos --}}
                        <form action="{{route('CuenEnvaseCampo.store')}}" method="post">
                        @CSRF
                            <div class="grid sm:grid-cols-1 md:grid-cols-2">
                                <div class="p-5 shadow-2xl ml-1 mr-5  border-dotted border-2 border-sky-500">
                                    {{-- inicio form --}}


                                    <div class="">
                                        <div class="border-b border-gray-900/10">
                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Asignación de
                                                Envases a Campos de Empresa</h2>
                                            <p class="mt-1 text-sm leading-6 text-gray-600">Ingreso de Stock de Envases
                                                por tipo.</p>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                                                <div class="col-span-6">
                                                    <label for="country"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Empresa
                                                        Principal.</label>
                                                    <div class="mt-2">

                                                        <h5
                                                            class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">

                                                            <select id="empresa_id" name="empresa_id"
                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                                <option>Seleccione Propietario</option>
                                                                @foreach ($empresas as $empresa)
                                                                    <option class="text-neutral-900"
                                                                        value="{{ $empresa->id }}">
                                                                        {{ $empresa->razon_social }}</option>
                                                                @endforeach
                                                            </select>
                                                        </h5>


                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <label for="country"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Campo</label>
                                                    <select id="campo_id" name="campo_id"
                                                        wire:model.defer="campo_id" wire:change="cambioCampo"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">

                                                    </select>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="country"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Envase.</label>
                                                    <div class="mt-2">
                                                        <select id="country" name="envase_id"
                                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                            <option>Seleccione Envase</option>
                                                            @foreach ($envaseCampo as $envase)
                                                                <option value="{{ $envase->id }}">
                                                                    {{ $envase->envase }}, Carga:
                                                                    {{ $envase->capacidad }}K, Tara:
                                                                    {{ $envase->tara }}K</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Saldo
                                                        Inicial del Envase
                                                    </label>
                                                    <div class="mt-2">
                                                        <input type="text" disabled id="saldoInicialDos" value=0
                                                            class="text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>
                                                <div class="col-span-3">

                                                </div>
                                                {{-- desgloce envases --}}
                                                <label for="first-name"
                                                    class="mt-2 block text-sm font-medium leading-6  text-gray-900">Cantidad</label>
                                                <div class="col-span-1">

                                                    <input type="text" id="cantidadColorDos"
                                                        onkeypress="return soloNumeros(event)"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                                <div class="col-span-2 mt-1">
                                                    <select id="color_idDos"
                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                        <option>Seleccionar Color</option>
                                                        @foreach ($colores as $color)
                                                            <option value="{{ $color->id }}">{{ $color->color }}
                                                            </option>
                                                        @endforeach
                                                        <select>
                                                </div>
                                                <div class="col-span-2">
                                                    <button id="btnsumarenvaseDos" type="button"
                                                        class="rounded-md bg-indigo-600 w-full px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar
                                                    </button>
                                                </div>
                                                <div class="col-span-6">
                                                    <table class="w-full text-center text-sm font-light"
                                                        id="grillaColorDos">
                                                        <thead
                                                            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                                            <tr>
                                                                <th scope="col" class=" px-2 py-2">
                                                                    Cantidad</th>
                                                                <th scope="col" class=" px-2 py-2">Color
                                                                </th>
                                                                <td class="whitespace-nowrap  px-2 py-2">
                                                                    Quitar</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                {{-- fin desgloce --}}
                                                <div class="col-span-full">
                                                    <label for="about"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                                                    <div class="mt-2">
                                                        <textarea id="about" name="observacionDos" rows="3"
                                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                    </div>
                                                    <p class="mt-3 text-sm leading-6 text-gray-600">Máximo
                                                        100 Carácteres.
                                                    </p>
                                                </div>


                                            </div>
                                        </div>


                                    </div>

                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                        {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                                        <button
                                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar
                                            Envases a Cuenta Corriente de la Empresa.</button>
                                    </div>


                                    {{-- fin form --}}


                                </div>
                                <div class="border-solid border-2 border-neutral-900 shadow-2xl">


                                    <table class="w-full text-center text-sm font-light border-solid border-2 border-sky-500">
                                        <thead
                                            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                            <tr class="border-solid border-2 border-sky-500">
                                             
                                                    
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">Campo.</th>
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">Tipo Envase</th>
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">Desglose de Envases</th>
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">Stock</th>
                                                    {{-- <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">Elimitar</th> --}}
                                                    
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($envaseempresa as $empresaCampo )
                                            <tr>
                                                    
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">{{$empresaCampo->campo->campo}}</th>
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">{{$empresaCampo->envase->envase}}</th>
                                                    <th class="px-6 py-4 border-solid border-2 border-sky-500">
                                                            <table class="w-full border-solid border-2 border-sky-500">
                                                                <thead>
                                                                    <tr class="border-solid border-2 border-sky-500">
                                                                        <th class="border-solid border-2 border-sky-500">Color</th>
                                                                        <th class="border-solid border-2 border-sky-500">Cantidad</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $cant=0; @endphp
                                                                    @foreach ($empresaCampo->desgloseenvasecampo as $desgloseEnvase )
                                                                        <tr class="border-solid border-2 border-sky-500">
                                                                            <th class="border-solid border-2 border-sky-500">{{$desgloseEnvase->color->color}}</th>
                                                                            <th class="border-solid border-2 border-sky-500">{{$desgloseEnvase->stock}}</th>
                                                                            @php $cant = $cant + $desgloseEnvase->stock; @endphp
                                                                        </tr>
                                                                    @endforeach
                                                                        <tr class="border-solid border-2 border-sky-500">    
                                                                            <th class="border-solid border-2 border-sky-500">-</th>
                                                                            <th class="border-solid border-2 border-sky-500">-</th>
                                                                        </tr>
                                                                        <tr class="border-solid border-2 border-sky-500">    
                                                                            <th class="border-solid border-2 border-sky-500">Total Envases de Campo</th>
                                                                            <th class="border-solid border-2 border-sky-500">{{$cant}}</th>
                                                                        <tr
                                                                </tbody>
                                                            </table>
                                                    </th>    
                                                            
                                               
                                                        
                                           
                                                   
                                                    <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">{{$empresaCampo->stock}}</th>
                                                    {{-- <th scope="col" class=" px-6 py-4 border-solid border-2 border-sky-500">
                                                         <center><button type="button" id="btnEliminarCampo"
                                                                data-valor="{{ $empresaCampo->id }}"
                                                                class="mb-1 inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </center>
                                                    </th> --}}
                                                  
                                            </tr>
                                                @endforeach


                                        </tbody>
                                    </table>

                                </div>
                                <!--Modal edicion  title-->



                                {{-- modal edicion --}}
                            </div>
                            <script>
                                window.addEventListener('GuardarEmnvaseEmpresa', function(e) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Éxito, Registro Guardado...',
                                        text: '{{ Session::get('success') }}',
                                        timer: 5000,
                                        showConfirmButton: false
                                    });
                                });
                                window.addEventListener('EliminarEmnvaseEmpresa', function(e) {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Éxito, Registro Eliminado...',
                                        text: '{{ Session::get('success') }}',
                                        timer: 5000,
                                        showConfirmButton: false
                                    });
                                });
                                window.addEventListener('ActualizarEnvaseEmpresa', function(e) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Éxito, Registro Actualizado...',
                                        text: '{{ Session::get('success') }}',
                                        timer: 5000,
                                        showConfirmButton: false
                                    });
                                });
                            </script>
                            {{-- fin cuenta corriente de Campos --}}
                        </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
