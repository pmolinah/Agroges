<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administración de Guías, Recepción y Despacho') }}
        </h2>
        
    </x-slot>
    <!-- Add Item Ml -->
   
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" px-3 md:lg:xl:px-20   border-t border-b py-20 bg-opacity-10"
                    style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">       
                    @livewire('guias.crud-guias')
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>