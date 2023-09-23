<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creación, Organización de Campos y Cuarteles') }}
            <x-widget.informacion />
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- contenido -->
                <div class="container-fluid">
                    <div class="grid md:grid-cols-3 xs:grid-cols-1 bg-primary-900 shadow-xl">
                        <div class="p-3 text-neutral-50">
                            {{-- <label class="ml-1 mb-3">Seleccione una Empresa para ver sus Campos y Cuarteles.</label> --}}
                            @livewire('campo.select-empresa')
                        </div>
                        <div class="mx-auto mr-3">
                            <a href="{{ route('Campo.create') }}">
                                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                    class=" mt-2 flex items-center rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">

                                    <i class="fa-sharp fa-solid fa-plus"></i>&nbsp;&nbsp;&nbsp;
                                    Crear Modificar Eliminar Campo
                                </button>
                            </a>
                        </div>
                         <div class="mx-auto mr-3">
                            <a href="{{ route('Cuartel.create') }}">
                                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                    class=" mt-2 flex items-center rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">

                                    <i class="fa-sharp fa-solid fa-plus"></i>&nbsp;&nbsp;&nbsp;
                                    Crear Modificar Eliminar Cuartel
                                </button>
                            </a>
                        </div>

                        <div class="p-3 sm:col-span-1 md:col-span-3">@livewire('campo.campos')</div>
                    </div>

                </div>
                <!-- contenido -->

            </div>
        </div>
    </div>
</x-app-layout>
