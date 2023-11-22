{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devolución de Envases') }}
        </h2>
        
    </x-slot>
    <!-- Add Item Ml -->  --}}



<x-dashBoard>
    <div class="grid grid-cols-12 gap-5 overflow-hidden sm:rounded-lg">
        <div class="col-span-12">
            <!-- component -->
            <x-widget.informacion/>
        </div>
        <!-- contenido -->
        <div class="col-span-4 m-1 bg-white rounded-lg shadow-lg">
            @livewire('graficos.graficos')
        </div>
        <div class="col-span-4 m-1 bg-white rounded-lg shadow-lg">
            @livewire('graficos.grafico-radial')
        </div>
        <div class="col-span-4 m-1 bg-white rounded-lg shadow-lg">
            @livewire('graficos.grafico-torta')
        </div>
        <div class="col-span-12 m-1 bg-white rounded-lg shadow-lg">
            @livewire('graficos.grafico-lineal')
        </div>
    </div>
</x-dashBoard>
<!-- contenido -->

{{--
</x-app-layout> --}}
