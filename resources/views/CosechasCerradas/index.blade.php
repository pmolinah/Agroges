<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Planificaciones de Cosechas Asignadas') }}
        </h2>
    </x-slot>
    <!-- Add Item Ml -->

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <div class="px-3 md:lg:xl:px-20   border-t border-b py-20 bg-opacity-10"
                    style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
                    {{-- <a href="{{ route('Cosecha.create') }}">
                        <button type="button"
                            class="inline-block mx-auto mb-2 rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Nueva Cosecha
                        </button>
                    </a> --}}
                    <div
                        class="grid grid-cols-1 md:lg:xl:grid-cols-1 group bg-white shadow-xl shadow-neutral-100 border p-5">
                        {{-- <div class="p-3 text-neutral-50">
                            <label class="ml-1 mb-3">Seleccione una Empresa para ver sus Campos y Cuarteles.</label>
                            @livewire('campo.select-empresa')
                        </div> --}}
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Fecha Cosecha Inicial</th>
                                    <th>Fechas Cosecha Final</th>
                                    <th>Campo</th>
                                    <th>Cuartel</th>
                                    <th>Especie</th>
                                    <th>Kilos Solicitados</th>
                                    <th>Kilos Totales Recolectados</th>
                                   
                                    <th>Informe Cosecha</th> 
                                    <th>Informe x Contratista</th>
                                    {{-- <th>Informe x Exportadora</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planificaciones as $planificacion)
                                    <tr>
                                        <td>{{ $planificacion->id }}</td>
                                        <td>{{ $planificacion->fechai }}</td>
                                        <td>{{ $planificacion->fechaf}}</td>
                                        <td>{{ $planificacion->cuartel->campo->campo}}</td>
                                        <td>{{ $planificacion->cuartel->observaciones}}</td>
                                        <td>{{ $planificacion->plantacion->especie->especie}}</td>
                                        <td>{{ $planificacion->kilos}}</td>
                                        <td>{{ $planificacion->kilosRealesCosechados}}</td>
                                       
                                         <td> 
                                                <a href="{{route('Reporte.cosecha',$planificacion->id)}}">
                                                    <button type="button"  class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                        <i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;&nbsp;Informe/Cosecha</i>
                                                    </button>
                                                </a>
                                        </td>
                                          <td> 
                                                @foreach ($planificacion->contraistaxplanificacion as $contratista)
                                                    
                                                    <a href="{{route('Reporte.cosecha.contratista', [$planificacion->id, $contratista->contratista_id])}}">
                                                        <button type="button"  class="mb-2 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                            <i class="fa-solid fa-apple-whole">&nbsp;&nbsp;&nbsp;{{$contratista->contratista->razon_social}}</i>
                                                        </button>
                                                    </a>
                                                @endforeach
                                        </td>
                                      
                                      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>





                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>