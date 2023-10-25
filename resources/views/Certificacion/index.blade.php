<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Campos y cuarteles Certificados') }}
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
                        class="grid grid-cols-1 md:lg:xl:grid-cols-12 group bg-white shadow-xl shadow-neutral-100 border p-5">
                        <div class="col-span-8 border-dotted border-2 border-sky-500 mr-4 p-1 shadow-2xl">
                            <div class="p-3">
                                <h5>Listado de Campos y Cuarteles</h5></label>
                            </div>
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Campo o Cuartel</th>
                                        <th>Sup./Ha</th>
                              
                                        <th>Especie</th>
                                        <th>Variedad</th>
                                        <th>Cantidad/Especie</th>
                                        <th>Cert./Vig./Venc.</th>
                                      
                                        <th>Asignar</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificacioCampo as $campo )
                                        
                                        <tr>
                                            <td></td>
                                            <td><i class="fa-solid fa-layer-group"></i>&nbsp;&nbsp;&nbsp;{{$campo->campo}}</td>
                                            <td>{{$campo->superficie}}</td>
                                               
                                            
                                            <td>N/A</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                            <td>
                                                @foreach ($campo->certificacionasignada as $campoCertificacion)
                                                    {{$campoCertificacion->certificacion->certificacion}}
                                                @endforeach
                                            </td>
                                       
                                          
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                        <i class="fa-solid fa-plus">&nbsp;&nbsp;&nbsp;
                                                            </i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" onclick="EditarCosecha()"
                                                    class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-warning-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                    <i class="fa-regular fa-pen-to-square">&nbsp;&nbsp;&nbsp;</i>
                                                </button>


                                            </td>
                                        </tr>
                                    @endforeach
                                
                                    @foreach ($certificacioCuartel as $Cuartel)
                                        <tr>
                                            <td></td>
                                            <td><i class="fa-solid fa-hashtag"></i>&nbsp;&nbsp;&nbsp;{{ $Cuartel->observaciones }}</td>
                                            <td>{{ $Cuartel->superficie }}</td>
                                                @foreach ($Cuartel->plantacion as $cuartelPlantacion )
                                                                                                   
                                                    <td>{{$cuartelPlantacion->especie->especie}}</td>
                                                    <td>{{$cuartelPlantacion->especie->variedad->variedad}}</td>
                                                    <td>{{$cuartelPlantacion->cantidadPlantada}}</td>
                                                    <td>
                                                        @foreach ($Cuartel->certificacionasignada as $cuartelCertificacion )
                                                            {{$cuartelCertificacion->certificacion->certificacion}}
                                                        @endforeach
                                                    </td>
                                                @endforeach
                                   
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                        <i class="fa-solid fa-plus">&nbsp;&nbsp;&nbsp;
                                                            </i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" onclick="EditarCosecha()"
                                                    class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-warning-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                    <i class="fa-regular fa-pen-to-square">&nbsp;&nbsp;&nbsp;</i>
                                                </button>


                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="col-span-4 border-dotted border-2 border-sky-500 p-2 shadow-2xl">
                           @livewire('certificaciones.crud-certificacion')
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
