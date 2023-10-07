<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administración de Cuentas Corrientes de Bins Exportadoras') }}
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
                            @livewire('cuenta-corriente.index')
                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-profile01" role="tabpanel" aria-labelledby="tabs-profile-tab01">
                            @livewire('envases.crud-envases')
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
