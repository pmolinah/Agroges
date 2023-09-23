<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Cosechas Planificadas') }}
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
                    <a href="{{ route('Cosecha.planificacionCreate') }}">
                        <button type="button"
                            class="inline-block mx-auto mb-2 rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Planificar Cosecha
                        </button>
                    </a>
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
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Final</th>
                                    <th>Propietario</th>
                                    <th>Campo</th>
                                    <th>Cuartel</th>
                                    <th>Especie</th>
                                    <th>Cantidad a cosechar</th>
                                    <th>Cantidad Cosechada</th>
                                    <th>Contratista/Ejecutor</th>
                                    <th>Eliminar</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($planificacioncosechas as $planificacioncosecha)
                                    <tr>
                                        <td>{{ $planificacioncosecha->id }}</td>
                                        <td>{{ $planificacioncosecha->fechai }}</td>
                                        <td>{{ $planificacioncosecha->fechaf }}</td>
                                        <td>{{ $planificacioncosecha->cuartel->campo->empresa->razon_social }}</td>
                                        <td>{{ $planificacioncosecha->cuartel->campo->campo }}</td>
                                        <td>{{ $planificacioncosecha->cuartel->observaciones }}</td>
                                        <td>{{ $planificacioncosecha->plantacion->especie->especie }}</td>
                                        <td>{{ $planificacioncosecha->kilos }}</td>
                                        <td></td>
                                        <td>
                                            @foreach ($planificacioncosecha->contraistaxplanificacion as $contraistaxplanificacion)
                                                <div data-te-chip-init data-te-ripple-init
                                                    class="[word-wrap: break-word] my-[5px] mr-4 flex h-[32px] cursor-pointer items-center justify-between rounded-[16px] bg-[#eceff1] px-[12px] py-0 text-[13px] font-normal normal-case leading-loose text-[#4f4f4f] shadow-none transition-[opacity] duration-300 ease-linear hover:!shadow-none active:bg-[#cacfd1] dark:bg-neutral-600 dark:text-neutral-200"
                                                    data-te-close="true">
                                                    {{ $contraistaxplanificacion->contratista->razon_social }}
                                                </div>
                                            @endforeach

                                        </td>


                                        <td>

                                            <button type="button" data-valor="{{ $planificacioncosecha->id }}"
                                                id="EliPlaCos" onclick="EliPlaCos({{ $planificacioncosecha->id }})"
                                                class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{route('Planificacion.edit',$planificacioncosecha->id )}}"><button type="button"
                                                {{-- onclick="EliminarSolicitudCliente({{ $planificacioncosecha->id }})" --}}
                                                class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-warning-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button></a>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script>
                            function EliPlaCos($id) {
                                var planificacioncosecha_id = $id;
                                Swal.fire({
                                    title: 'Esta Seguro de Eliminar la Planificación?',
                                    text: "Ya no podra recurar la información !",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, Eliminarlo!'
                                }).then((result) => {

                                    if (result.isConfirmed) {

                                        $.get('/api/Eliminar/' + planificacioncosecha_id + '/PlanificacionCosecha', function(info) {
                                            Swal.fire(
                                                'Borrado!',
                                                'Registro Eliminado.',
                                                'success'
                                            )
                                            setTimeout(function() {
                                                location.reload(); // Esta línea recarga la página
                                            }, 2000);
                                        });
                                        //api fin

                                    }
                                })
                            }
                        </script>



                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
