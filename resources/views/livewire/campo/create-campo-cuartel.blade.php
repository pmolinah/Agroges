<div class="grid xs:grid-cols-1 md:grid-cols-6">
    <!-- component -->

    <div class="col-span-6">
        <div class="grid grid-cols-3 gap-4 p-3 bg-neutral-300">
            <div class="">
                <h2 class="text-center text-2xl font-bold tracking-wide text-seconday-50">Paso 1.- Seleccione Propietario
                </h2>
                <p class="text-center text-sm text-gray-500">@livewire('campo.select-empresa') </p>
            </div>


            <div class=" pointer-events-auto mx-auto mb-4 hidden  rounded-lg bg-primary-100 bg-clip-padding text-sm text-primary-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
                id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-te-autohide="false"
                data-te-toast-init data-te-toast-show>
                <div
                    class="flex items-center justify-between rounded-t-lg border-b-2 border-primary-200 bg-primary-100 bg-clip-padding px-4 pb-2 pt-2.5 text-primary-700">
                    <p class="flex items-center font-bold text-primary-700">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                            </path>
                        </svg>
                        Crear Campo
                    </p>
                    <div class="flex items-center">
                        <p class="text-xs text-primary-700">uno a uno</p>
                        <button type="button"
                            class="ml-2 box-content rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-toast-dismiss aria-label="Close">
                            <span
                                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="break-words rounded-b-lg bg-primary-100 px-4 py-4 text-primary-700">
                    Seleccione el Propietario, y posterior a ello ingrese los datos del campo en el recuadro azul y
                    presione el boton Añadir Campo...
                </div>
            </div>
            <div class="pointer-events-auto mx-auto mb-4 hidden  rounded-lg bg-success-100 bg-clip-padding text-sm text-success-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
                id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-te-autohide="false"
                data-te-toast-init data-te-toast-show>
                <div
                    class="flex items-center justify-between rounded-t-lg border-b-2 border-success/20 bg-success-100 bg-clip-padding px-4 pb-2 pt-2.5">
                    <p class="flex items-center font-bold text-success-700">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                            class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                            </path>
                        </svg>
                        Crear Cuartel
                    </p>
                    <div class="flex items-center">
                        <p class="text-xs text-success-700">Listado de Campos</p>
                        <button type="button"
                            class="ml-2 box-content rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-toast-dismiss aria-label="Close">
                            <span
                                class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="break-words rounded-b-lg bg-success-100 px-4 py-4 text-success-700">
                    Seleccione el Propietario para desplegar todos los campos asociados, en el listado que aparece en el
                    recuadro gris, presione el boton agregar cuartel en el campo correspospondiente.
                </div>
            </div>

        </div>
    </div>
    <div class="bg-primary-600 col-span-2 mb-10 ml-2 mr-2 mt-8 mx-auto px-16 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">2.- Datos del Campo</h2>
        <form class="my-8 text-sm">
            <div class="flex flex-col my-4">
                <label for="name" class="text-warning-300">Nombre del Campo</label>
                <input type="text" wire:model.defer="campo"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Nombre del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="name" class="text-warning-300">Rut, Ejemplo 12345678-9</label>
                <input type="text" wire:model.defer="rut" id="rut"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Rut">
            </div>
            <div class="flex flex-col my-4">
                <label for="email" class="text-warning-300">Dirección</label>
                <input type="text" wire:model.defer="direccion"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Dirección del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="text" class="text-warning-300">Metros Cuadrado</label>
                <input type="number" wire:model.defer="superficie" min="1" max="50"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="M. cuadrados">
            </div>
            <div class="flex flex-col my-4">
                {{-- @livewire('campo.select-comuna') --}}
                @livewire('campo.select-comuna')

            </div>
            <div class="flex flex-col my-4">

                @livewire('campo.select-admin')
            </div>
            <div class="flex flex-col my-4">

                @livewire('campo.select-capataz')
            </div>
            <div class="my-4 flex items-center justify-center space-x-4">
                <button wire:click.prevent="save"
                    class="bg-success-900 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Añadir
                    Campo a la Empresa Principal</button>
            </div>
        </form>
    </div>
    {{-- lista de campos de la empresa. --}}

    <div class="col-span-2 bg-secondary-600 mb-10 ml-2 mr-2 mt-8 mx-auto px-5 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">Lista de Campos del Propietario
            Seleccionado</h2>
        @livewire('campo.lista-campos-edit')
    </div>
    <div class="col-span-2 bg-warning-800 mb-10 ml-2 mr-2 mt-8 mx-auto px-5 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">Lista de Cuarteles del Campo Seleccionado</h2>
            
        @livewire('cuartel.crud-cuartel')
        
    </div>
    

    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ Session::get('error') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
    <script>
        window.addEventListener('swal', function(e) {
            
            Swal.fire({
                icon: 'success',
                title: 'Éxito, Campo Guardado...',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
          
        });
    </script>

</div>
