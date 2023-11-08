<div>
    <div>
    <form action="{{route('store.certificadoCuartel')}}" method="post" enctype="multipart/form-data">
    @CSRF
    <div class="grid grid-cols-1 md:lg:xl:grid-cols-12 group bg-white shadow-xl shadow-neutral-100 border p-5">
            {{-- ingreso --}}
                <div   class="col-span-6">
                  
                    <!--Modal body-->
                    <div class="grid grid-cols-10 border-solid border-2 border-sky-500 m-2 shadow-2xl">
                    <div class="col-span-10 p-3 bg-info-100">
                        <h3 class="text-bold text-xl text-center">
                            Asignación de Certificados al Cuartel
                        </h3>
                    </div>
                        <div class="font-bold col-span-10 relative  p-2 m-2">
                            Nombre Certificación
                            
                                    <select wire:model.defer="certificado_id" name="certificado_id"
                                        class="border-solid border-2 border-sky-500 block w-full rounded-md border-0 py-1.5 text-neutral-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                        @foreach ($certificacion as $certificaciones)
                                            <option value="{{ $certificaciones->id }}">{{ $certificaciones->certificacion }}</option>
                                        @endforeach

                                    </select>
                               
                        </div>
                        <div class="col-span-10 p-2 ">
                            Fecha Inicio......:
                            <input type="date" wire:model.defer="fechaInicio" name="fechaInicio" class="border-solid border-2 border-sky-500">
                        </div>
                         <div class="col-span-10 p-2 ">
                            Fecha Termino:
                            <input type="date" wire:model.defer="fechaTermino" name="fechaTermino" class="border-solid border-2 border-sky-500">
                        </div>
                        <div class="col-span-10 p-2 m-2 ">
                        Cuartel
                                <select wire:model.defer="cuartel_id" name="cuartel_id"
                                        class="border-solid border-2 border-sky-500 block w-full rounded-md border-0 py-1.5 text-neutral-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option></option>
                                        @foreach ($certificacionCuartel as $cuartel)
                                            <option value="{{ $cuartel->id }}">{{ $cuartel->observaciones }}</option>
                                        @endforeach

                                    </select>
                        </div>
                         <div class="col-span-10 p-2  m-2">
                            Casa Certificadora
                            <input type="text" wire:model.defer="casaCertificadora" name="casaCertificadora" class="block w-full border-solid border-2 border-sky-500">
                        </div>
                         <div class="col-span-10 p-2  m-2">
                            Adjuntar Documento
                            <input type="file"  name="file" class="block w-full border-solid border-2 border-sky-500">
                        </div>
                         <div class="col-span-10 p-2  m-2">
                            Alerta de Caducidad..(Días)
                            <input type="number" wire:model.defer="alerta" name="alerta" class="block border-solid border-2 border-sky-500">
                        </div>
                        <div class="col-span-10  m-5  shadow-xl">
                            <label class="font-bold">Observación Max 100 Caractéres.</label>
                            <textarea wire:model.defer="observacion" rows="3" name="observacion"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                       
                    </div>
                    <!--Modal footer-->
                    <div
                        class="">
                       
                        <button type="submit" 
                            class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                            Asignar Certificado al Cuartel
                        </button>
                    </div>
                </div>
            {{-- ingreso --}}
        </form>
        <div class="col-span-6 border-solid border-2 border-sky-500 p-2 shadow-2xl m-2">
            {{-- caja creacion --}}

            <div class="space-y-2">
                <!-- Button trigger vertically centered modal-->
                <div class="grid sm:grid-cols-1 md:grid-cols-3 borde-neutral-800">
                    <div class="">
                        <button type="button"
                            class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
                            data-te-ripple-color="light">
                            <i class="far fa-plus"></i></button>
                        </button>
                    </div>
                    <div class="text-center">
                        <h6 class="text-xl text-bold ">Ingreso de Nombres de Certificaciones </h6>
                    </div>
                    <div class="">

                        <input type="text" wire:model="search"
                            class="w-full border-solid border-2 border-sky-500 p-2" placeholder="Buscar"/>
                    </div>
                </div>


                <!--Verically centered modal-->
                <div data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    data-te-backdrop="static" data-te-keyboard="false" id="exampleModalCenter" tabindex="-1"
                    aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                    <div data-te-modal-dialog-ref
                        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                        <div
                            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-info-900">
                            <div
                                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <!--Modal title-->
                                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">

                                    Nuevo Certificado
                                </h5>
                                <!--Close button-->
                                <button type="button"
                                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                    data-te-modal-dismiss aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!--Modal body-->
                            <div class="relative p-4 text-neutral-50">
                                Certificación
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <input type="text" wire:model.defer="certificado"
                                        class="peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-900 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />

                                </div>
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <button type="button" wire:click="Limpiar"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                    Cerrar
                                </button>
                                <button type="button" wire:click="Save"
                                    class="ml-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                    data-te-ripple-init data-te-ripple-color="light" data-te-modal-dismiss>
                                    Guardar Certificado
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- tabla --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-xl m-1">
                                <table class="min-w-full text-center text-sm font-light ">
                                    <thead
                                        class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                        <tr>

                                            <th scope="col" class=" px-6 py-4">Certificación</th>

                                            <th scope="col" class=" px-6 py-4">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($certificacion as $certificaciones)
                                            <tr class="border-b dark:border-neutral-500">

                                                <td class="whitespace-nowrap">{{ $certificaciones->certificacion }}
                                                </td>


                                                <td class="whitespace-nowrap  px-6 py-4">
                                                    <center><button type="button"
                                                            wire:click="EliminarnombreCertificado({{ $certificaciones->id }})"
                                                            class="mb-1 inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                            <i class="far fa-trash-alt"></i></button>
                                                    </center>
                                                    {{-- <center><button type="button"
                                                            wire:click="EditarCertificado({{ $certificaciones->id }})"
                                                            class="mb-1inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]"><i
                                                                class="far fa-edit"></i></button>
                                                    </center> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {{ $certificacion->links() }}
                        </div>
                    </div>
                </div>


                <script>
                    window.addEventListener('GuardarCertificado', function(e) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito, Registro Guardado...',
                            text: '{{ Session::get('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    });
                    window.addEventListener('Eliminar', function(e) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Éxito, Registro Eliminado...',
                            text: '{{ Session::get('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    });
                    window.addEventListener('Actualizar', function(e) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito, Registro Actualizado...',
                            text: '{{ Session::get('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    });
                </script>
                {{-- fin caja --}}
            </div>
            <div class="col-span-7 border-solid border-2 border-sky-500  p-1 m-2 shadow-2xl">
            <div class="p-3 text-xl text-bold">
                <h5>Listado de Cuarteles</h5></label>
            </div>
            <script>
               
            </script>
            <table class="min-w-full text-center text-sm font-light ">
                <thead class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                    <tr>

                        <th class=" px-6 py-4">Cuartel</th>
                        <th class=" px-6 py-4">Sup./Ha</th>
                        <th class=" px-6 py-4">Cert./Vig./Venc. <p>Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-trash-alt"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificacionCuartel as $cuartel)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="text-left"><i class="fa-solid fa-layer-group"></i>&nbsp;&nbsp;&nbsp;{{ $cuartel->observaciones }}</td>
                            <td>{{ $cuartel->superficie }}</td>
                            <td  class="text-center">
                            <center>
                                <table>
                                    <thead>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($cuartel->certificacionasignadacuartel as $cuartelCertificacioncuartel)
                                            <tr>
                                                <th class="border-solid border-2 border-sky-500">{{$cuartelCertificacioncuartel->certificacion->certificacion }}</th>
                                                <th class="border-solid border-2 border-sky-500"><a href="../../{{$cuartelCertificacioncuartel->rutaDocumento}}{{$cuartelCertificacioncuartel->documento}}" target="_blank">
                                                        <button type="button" class="mb-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                                <i class="far fa-search">
                                                        </i></button>           
                                                    </a>           
                                                </th>    
                                                <th class="border-solid border-2 border-sky-500">
                                                    <button type="button" wire:click="EliminarCertificado({{ $cuartelCertificacioncuartel->id }})"
                                                    class="mb-1 inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                    <i class="far fa-trash-alt">.</i>
                                                    </button>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </center>
                            </td>

                            {{-- <td>
                                <button type="button" class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                    data-te-toggle="modal" data-te-target="#exampleModalCenteraaaa" data-te-ripple-init
                                    data-te-ripple-color="light"><i class="far fa-plus"></i></button>
                                </button>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </div>
        
        {{-- modal cert --}}
        <!--Verically centered modal-->
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            data-te-backdrop="static" data-te-keyboard="false" id="exampleModalCenteraaaa" tabindex="-1"
            aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[700px]">
                
            </div>
        </div>
        {{-- modal --}}
    </div>
</div>
