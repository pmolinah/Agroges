<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Empresas') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-12 py-5 px-5">
        <!-- edit rol formulario nuevo -->
        <div class="xs:col-start-1 xs:col-end-12 md:col-start-3 md:col-span-8 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-secondary-900">



                     {!! Form::model($Empresa, ['route'=>['Empresa.update',$Empresa->id], 'method'=>'PUT']) !!}
                        @csrf

                        @include('Empresa.partials.form')

                    {!! Form::close() !!}
                    <!-- nuevos usuarios -->
                    

 
    
                <!-- </div> -->
            </div>
        </div>
    </div>
</x-app-layout>

 <!-- Contenido formulario funcionando -->
 