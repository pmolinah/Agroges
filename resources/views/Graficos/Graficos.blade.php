<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devolución de Envases') }}
        </h2>
        
    </x-slot>
    <!-- Add Item Ml -->
   
    <div class="grid grid-cols-12 gap-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
       
        
                
                <!-- contenido -->
                <div class="col-span-4 m-2 shadow-xl">
                    @livewire('graficos.graficos')
                </div>
                <div class="col-span-4 m-2 shadow-xl">
                    @livewire('graficos.grafico-radial')
                </div>
                 <div class="col-span-4 m-2 shadow-xl">
                    @livewire('graficos.grafico-torta')
                </div>
                 <div class="col-span-12 m-2 shadow-xl">
                    @livewire('graficos.grafico-lineal')
                </div>
                <!-- contenido -->
       
    </div>
</x-app-layout>