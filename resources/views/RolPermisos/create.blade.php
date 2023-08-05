<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Roles') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-12 py-5 px-5">
        <!--  nuevos rol -->
                    <div class="xs:col-start-1 xs:col-end-12 md:col-start-3 md:col-span-8 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-500">
                        <form action="{{route('Rol.store')}}" method="post">
                            @csrf
                            
                            
                                <!--rut-->
                                <div class="grid grid-cols-1">
                                    <div class="md:col-start-1 md:col-span-12 relative mb-3" data-te-input-wrapper-init>
                                        <input id="rol" maxlength="50" type="text" name="name" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="emailHelp123" placeholder="First name" />
                                        <label for="emailHelp123" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                        Rol
                                        </label>
                                    </div>

                             
                                    <div class="md:col-start-1 md:col-span-12 relative mb-6" data-te-input-wrapper-init>
                                        <textarea type="text" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="description" name="description"
                                            placeholder=""></textarea>
                                        <label
                                            for="exampleInput125"
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                            >Descripción
                                        </label>
                                    </div>
                                    <div class="md:col-start-1 md:col-span-2">
                                        <button id="btn_sv" type="submit" class=" py-5 mb-5 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                        data-te-ripple-init
                                        data-te-ripple-color="light">
                                        Crear Rol
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <!-- permisos -->
                                    <div class="bg-white rounded-lg p-5 pt-5">

                                     
                                        <div class="flex flex-col">
                                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                                <div class="overflow-hidden">
                                                    <table class="min-w-full text-left text-sm font-light">
                                                    <thead
                                                        class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-blue-800 text-neutral-50">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-4">Permisos de Administrador</th>
                                                            <th scope="col" class="px-6 py-4">Permisos de Usuario</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700 text-neutral-50">
                                                            <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                                                        
                                                                @foreach($permissions as $permission)
                                                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                                                    <input
                                                                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                                        type="checkbox"
                                                                        value="{{$permission->id}}"
                                                                        name="permission[]"
                                                                        id="checkboxDefault" />
                                                                    <label
                                                                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                                                        for="checkboxDefault">
                                                                       {{ $permission->description}}
                                                                    </label>
                                                                </div>
                                                                @endforeach

                                                            </td>
                                                            <td class="whitespace-nowrap px-6 py-4">xxx,</td>
                                                        </tr>
                                                    
                                                    </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- tabla -->
                                    </div>
                                    <!-- permisos -->
                                </div>
       

                            <!--Submit button-->
                        </form>
                    </div>
                    <!-- nuevos usuarios -->
   

 
    
                <!-- </div>
            </div>
        </div> -->
    </div>
</x-app-layout>
