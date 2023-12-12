<x-dashBoard>
    <div class="grid grid-cols-12 gap-2 overflow-hidden sm:rounded-lg">
        <div class="col-span-12">
            @livewire('graficos.especie-xanio')
        </div>
        <div class="col-span-3 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.graficos')
        </div>
        <div class="col-span-6 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.apex-barra-apilada')
        </div>

        <div class="col-span-3 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.grafico-radial')
        </div>
        <div class="col-span-3 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.grafico-torta')
        </div>
        <div class="col-span-6 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.grafico-lineal')
        </div>
        <div class="col-span-3 m-1 bg-white rounded-lg shadow-lg shadow-neutral-800">
            @livewire('graficos.apex-torta')
        </div>
    </div>
</x-dashBoard>
