<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Empresas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8 border-solid border-2 border-sky-500 p-5">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('Empresa.store') }}" method="post">
                    @CSRF
                    <div class="grid grid-cols-6 gap-2 mx-auto p-5 overflow-hidden bg-secondary-100 shadow-2xl border-solid border-2 border-sky-500">
                        <!-- contenido -->

                        <div class="relative mb-3">
                            Rut
                            <input type="text" class="w-full border-solid border-2 border-sky-500 p-1"  id="rut" required name="rut"
                                class=" m-2 peer block min-h-[auto] rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-800 peer-focus:text-neutral-50 data-[te-input-state-active]:placeholder:opacity-800 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <label
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Rut
                            </label>
                        </div>
                        <div class="relative mb-3 col-span-5">Razón Social 
                            <input type="text" required name="razon_social" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                           
                        </div>
                        <div class="relative mb-3 col-span-3">
                        Dirección
                            <input type="text" name="direccion" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                          
                        </div>
                        <div class="relative mb-3 col-span-3">
                        Comuna
                            <select name="comuna_id" class="w-full border-solid border-2 border-sky-500 p-1.5">
                                <option></option>
                                @foreach ($comunas as $comuna)
                                    <option value="{{ $comuna->id }}">{{ $comuna->comuna }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative mb-3 col-span-2" >
                            Propietario
                            <input type="text" required name="nombre" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                           
                        </div>
                        <div class="relative mb-3 col-span-2" >
                            Telefonos
                            <input type="text" name="telefono" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                          
                        </div>
                        <div class="relative mb-3 col-span-2">
                        Tipo Empresa
                            <select  name="tipo_id" class="w-full border-solid border-2 border-sky-500 p-1.5">
                                <option></option>
                                @foreach ($tipo as $tipos)
                                    <option value="{{ $tipos->id }}">{{ $tipos->tipo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative mb-3 col-span-3" >
                        Email
                            <input type="email" name="email" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                           
                        </div>
                        <div class="relative mb-3 col-span-3" >
                        Giro
                            <input type="text" name="giro" class="w-full border-solid border-2 border-sky-500 p-1"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                           
                        </div>
                        <div class=" mt-5">
                            <button type="submit"
                                class="mb-2 block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                Guardar Empresa
                            </button>
                        </div>
                        <!-- contenido -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
