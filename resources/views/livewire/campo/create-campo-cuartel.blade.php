<div class="grid xs:grid-cols-1 md:grid-cols-3">
    <!-- component -->

    <div class="bg-primary-600 mb-10 ml-2 mr-2 mt-8 mx-auto px-16 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">Seleccione Empresa Principal</h2>

        <p class="text-center text-sm text-gray-100 mt-2">@livewire('campo.select-empresa') </p>
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
                    placeholder="Nombre del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="email" class="text-warning-300">Dirección</label>
                <input type="text" wire:model.defer="direccion"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Dirección del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="text" class="text-warning-300">Mestros Cuadrado</label>
                <input type="number" wire:model.defer="superficie"
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
                <button wire:click="save"
                    class="bg-success-900 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Añadir
                    Campo a la Empresa Principal</button>
            </div>
        </form>
    </div>
    {{-- lista de campos de la empresa. --}}

    <div class="col-span-2 bg-secondary-600 mb-10 ml-2 mr-2 mt-8 mx-auto px-5 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">Lista de Campos de la Empresa
            Seleccionada</h2>
        @livewire('campo.lista-campos-edit')
        {{-- <p class="text-center text-sm text-gray-100 mt-2">@livewire('campo.select-empresa') </p> --}}
        {{-- <form class="my-8 text-sm">
            <div class="flex flex-col my-4">
                <label for="name" class="text-warning-300">Nombre del Campo</label>
                <input type="text" name="name" id="name"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Nombre del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="email" class="text-warning-300">Dirección</label>
                <input type="email" name="email" id="email"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Dirección del Campo o Agrícola">
            </div>
            <div class="my-4 flex items-center justify-center space-x-4">
                <button
                    class="bg-success-900 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Añadir
                    Campo a la Empresa Principal</button>
            </div>
        </form> --}}
    </div>
    {{--  <div class="bg-primary-600 mb-10 ml-2 mr-2 mt-8 mx-auto px-16 py-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold tracking-wide text-neutral-50">Seleccione Empresa Principal</h2>
        <p class="text-center text-sm text-gray-100 mt-2">@livewire('campo.select-empresa') </p>
        <form class="my-8 text-sm">
            <div class="flex flex-col my-4">
                <label for="name" class="text-warning-300">Nombre del Campo</label>
                <input type="text" name="name" id="name"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Nombre del Campo o Agrícola">
            </div>
            <div class="flex flex-col my-4">
                <label for="email" class="text-warning-300">Dirección</label>
                <input type="email" name="email" id="email"
                    class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Dirección del Campo o Agrícola">
            </div>
            <div class="my-4 flex items-center justify-center space-x-4">
                <button
                    class="bg-success-900 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Añadir
                    Campo a la Empresa Principal</button>
            </div>
        </form>
    </div> --}}

    @if(Session::has('success'))
                        
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
                @if(Session::has('error'))
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
</div>
