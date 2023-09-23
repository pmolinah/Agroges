<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creacion de Cuarteles') }}
        </h2>
    </x-slot>
            @livewire('cuartel.crud-cuartel')
</x-app-layout>