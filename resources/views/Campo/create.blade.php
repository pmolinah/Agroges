 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Creación de Campos, Agrícolas y sus cuarteles') }}
         </h2>
     </x-slot>

     <div class="py-12">
         <div class="mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <div class=" overflow-hidden">
                     <!-- contenido -->
                        @livewire('campo.create-campo-cuartel')

                    {{-- contenido --}}
                 </div>
             </div>
         </div>
     </div>
 </x-app-layout>
