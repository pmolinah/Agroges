<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devolución de Envases') }}
        </h2>
        
    </x-slot>
    <!-- Add Item Ml -->
   
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <!-- contenido -->
                @livewire('graficos.graficos');
                <!-- contenido -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>