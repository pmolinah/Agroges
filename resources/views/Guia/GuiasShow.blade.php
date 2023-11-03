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
                <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10"
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
                                    <th>Tipo Guía</th>
                                    <th>Guía N°</th>
                                    <th>Fechas Emisión</th>
                                    <th>Exportadora</th>
                                    <th>Campo</th>
                                    <th>Cuartel</th>
                                    <th>Especie</th>
                                    <th>Kilos Totales</th>
                                    <th>Tipo Envase</th>
                                    <th>Envases Totales</th>
                                    <th>Observación</th>
                                    <th>Ver Guía</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guias as $guia)
                                    <tr>
                                        <td>Despacho</td>
                                        <td>{{ $guia->numero }}</td>
                                        <td>{{ $guia->fecha}}</td>
                                        <td>{{ $guia->empresa->razon_social}}</td>
                                        <td>{{ $guia->planificacioncosecha->cuartel->campo->campo}}</td>
                                        <td>{{ $guia->planificacioncosecha->cuartel->observaciones}}</td>
                                        <td>{{ $guia->planificacioncosecha->plantacion->especie->especie}}</td>
                                        <td>{{ $guia->cantidadKilos}}</td>
                                        <td>{{ $guia->envase->envase}}</td>
                                        <td>{{ $guia->cantidadEnvases}}</td>
                                        <td>{{ $guia->observacion}}</td>
                                       
                                        <td>      
                                                <a href="{{route('Guia.despacho',$guia->id)}}"
                                                    <button type="button"  class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-warning-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                        <i class="fa-solid fa-magnifying-glass"></i> <!--&nbsp;&nbsp;&nbsp;</i> onclick="EditarCosecha({{$guia->id}})" -->
                                                    </button>
                                                </a>      

                                        </td>
                                    </tr>
                                @endforeach
                                 @foreach ($guiasRecepcion as $guiaRecep)
                                    <tr>
                                        <td>Recepción</td>
                                        <td>{{ $guiaRecep->numero }}</td>
                                        <td>{{ $guiaRecep->updated_at}}</td>
                                        <td>{{ $guiaRecep->empresa->razon_social}}</td>
                                        <td>{{ $guiaRecep->campo->campo}}</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>{{ $guiaRecep->observacion}}</td>
                                       
                                        <td>      
                                                <a href="{{route('Guia.RecepcionEmitir',$guiaRecep->id)}}"
                                                    <button type="button"  class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-warning-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </a>      

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