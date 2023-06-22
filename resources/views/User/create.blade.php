<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto w-5/5 p-3 px-3 overflow-hidden flex justify-center">
                    
                    <!-- nuevos Usuarios -->
                    <div class="block max-w-4xl rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <form action="{{route('User.store')}}" method="post">
                            @csrf
                            
                            <div class="grid grid-cols-12 gap-2">
                                <!--rut-->
                                <div class="xs:col-span-10 relative md:col-span-3 mb-6" data-te-input-wrapper-init>
                                    <input id="rut" maxlength="10" type="text" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="emailHelp123" placeholder="First name" />
                                    <label for="emailHelp123" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                        Rut Ej:12345678-K
                                    </label>
                                </div>

                            <!--nombre input-->
                                <div class="xs:md:col-start-1 xs:col-span-12 md:col-start-5 md:col-span-8 relative mb-6" data-te-input-wrapper-init>
                                <input type="text" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="name" name="name"
                                    placeholder="" />
                                <label
                                    for="exampleInput125"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                    >Nombre Completo
                                </label>
                                </div>
                            <!--nombre input-->

                             </div>
                             <!--email input-->
                             <div class="relative mb-6" data-te-input-wrapper-init>
                                <input
                                    type="email" required
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="email" name="email"
                                    placeholder="" />
                                <label
                                    for="exampleInput125"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                    >Email
                                </label>
                            </div>

                          
                            <!--select tipo input-->
                            <div class="grid xs:gri-cols-1 md:grid-cols-12">
                                <div class="md:col-start-1 md:col-span-5">
                                    <select data-te-select-init id="tipo" required name="tipo">
                                        <option value="">Seleccione un Tipo de Usuario</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Cliente</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- fin  -->
                            <div class="grid xs:gri-cols-1 py-6 md:grid-cols-12">
                                <div class="md:col-start-1 md:col-span-5">
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input required
                                        type="text"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="password"
                                        placeholder="Example label" />
                                    <label
                                        for="exampleFormControlInput1"
                                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                        >Password
                                    </label>
                                    </div>     
                                </div>     
                            </div>
                            

                            <!--Submit button-->
                            <div class="">
                                <button id="btn_sv"
                                type="submit"
                                class="inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                Guardar Usuario
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- nuevos usuarios -->
                    @if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ Session::get('success') }}',
            timer: 4000,
            showConfirmButton: false
        });
    </script>
@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
