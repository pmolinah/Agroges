<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planilla de Cosecha') }}
        </h2>
    </x-slot>
    <!-- Add Item Ml -->

    <div class="py-5">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <div class="px-3 md:lg:xl:px-10   border-t border-b py-10 bg-opacity-10"
                    style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
                   
                    @livewire('cosecha.cosechar', ['planificacioncosecha_id' => $planificacioncosecha_id])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

