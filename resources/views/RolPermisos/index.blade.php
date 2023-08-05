<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Roles y Permisos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto w-5/5 p-3 px-3 overflow-hidden">
                    <a href="{{route('Rol.create')}}">
                        <button type="button" class="inline-block rounded bg-success px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Nuevo Rol
                        </button>
                    <!-- @can('Admin.Usuario.Nuevo') -->
                    <!-- @endcan -->
                    </a>
                    <!-- tabla Usuarios -->
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                <thead
                                    class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-500">
                                    <tr class="font-light">
                                    <th scope="col" class="px-6 py-4"><p class="text-neutral-800">#</p></th>
                                    <th scope="col" class="px-6 py-4">Nombre Rol</th>
                                    <th scope="col" class="px-6 py-4">Descripción</th>
                                    <!-- <th scope="col" class="px-6 py-4">Fecha Creación</th> -->
                                    <th scope="col" class="px-6 py-4">Editar</th>
                                    <th scope="col" class="px-6 py-4">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Roles as $rol)
                                        <tr
                                        class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-200">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$rol->id}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $rol->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $rol->description }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]">
                                                <a href="{{ route('roles.edit',$rol->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Editar </a>
                                                </button>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <!-- <button type="button" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-700 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                                    Eliminar
                                                </button> -->
                                                <button class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-700 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]" onclick='EliminarRole({{ $rol->id }})'>Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- tabla usuarios -->
                </div>
            </div>
        </div>
    </div>
    <script>
           function EliminarRole(id)
            {
                Swal.fire({
                title: 'Estas Seguro de Borrqr el Rol?',
                text: "Solo puedes borrar rol  no asignados",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borrar Rol!'
                }).then((result) => {
                if (result.isConfirmed) {
                    // procedinmiento de eliminado
                    $.get('/api/Eliminar/'+id+'/Rol/',function(retorno){
                    // fin procedimeinto
                        Swal.fire(
                        'Elimindo!',
                        'El Rol fue Eliminado.',
                        'success'
                        )
                        setTimeout ("location.reload();", 1000); 
                    });
                }
                })
            }
            //     Swal.fire({
            //     title: "Eliminar Rol",
            //     text: "!! Sólo puede borrar Roles sin Asignar, Después sólo desactivar ¡¡",
            //     type: 'warning',
            //     showCancelButton: true,
            //     allowOutsideClick: false,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Si, Borrar Rol'
            //         }).then((result) => {
                    
            //             if (result.value) {
            //                      Swal.fire(
            //                      'Rol Eliminado',
            //                      'Rol Eliminado, puede continuar',
            //                      'success'
            //                     )
            //                     // location.reload();
            //                     setTimeout ("location.reload();", 1000); 
            //             }
            //             $.get('/api/Eliminar/'+id+'/Rol/',function(retorno){
                            
            //                  Swal.fire({
            //                      title: 'Rol Borrado',
            //                      text: 'Puede Continuar...',
            //                      type: 'success',
            //                      onfirmButtonText: 'Ok',
            //                      showConfirmButton: false,
            //                      timer: 1000,
            //                  });
            //                 setTimeout ("location.reload();", 1000); 
            //             });
            //         });
            // }
            
        </script>
</x-app-layout>