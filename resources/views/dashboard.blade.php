<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <!-- Add Item Ml -->
   
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <div class="mx-auto w-3/5 overflow-hidden"> --}}
                <!-- contenido -->
                <!-- component -->
                <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10 shadow-xl shadow-neutral-900"
                    >
                    <div
                        class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">


                        <div
                            class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                            <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg> --}}
                                <i class="fa-sharp fa-solid fa-user-check fa-xl" style="color: #f3f4f7;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Administración de Usuarios</p>
                            <p class="mt-2 text-sm text-slate-500">Cree, Asigne y perfile usuarios del sistema</p>
                        </div>

                        <div
                            class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                            <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg> --}}
                                <i class="fa-sharp fa-solid fa-list fa-2xl" style="color: #f0f2f4;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Informes del Sistema</p>
                            <p class="mt-2 text-sm text-slate-500">Reportabilidad del sistema, Informes exportables
                                excel, pdf</p>
                        </div>

                        <div
                            class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                            <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                </svg> --}}
                                <i class="fa-sharp fa-solid fa-book fa-2xl" style="color: #f0f2f5;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Guía de Usuario del Sistema y Ticket de
                                Soporte</p>
                            <p class="mt-2 text-sm text-slate-500">Consulte la Guía de usuario o Comuníquese con soporte
                                técnico mediante un ticket de ayuda.</p>
                        </div>


                        <div
                            class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                            <div class="mx-auto w-full overflow-hidden">
                            {{-- <canvas
                                data-te-chart="bar"
                                data-te-dataset-label="Traffic"
                                data-te-labels="['Monday', 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday ']"
                                data-te-dataset-data="[2112, 2343, 2545, 3423, 2365, 1985, 987]">
                            </canvas> --}}
                            
                            </div>
                            {{-- <span class="p-5 rounded-full bg-lime-500 text-white shadow-lg shadow-lime-200"> --}}
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg> --}}
                                {{-- <i class="fa-solid fa-chart-simple fa-2xl" style="color: #f3f8f2;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Gráficos de Rendimiento de la Producción
                            </p>
                            <p class="mt-2 text-sm text-slate-500">Genere Reportes gráficos para medir rendimientos de
                                trabajo</p> --}}
                        </div>

                        <div
                            class="p-10 flex flex-col items-center text-center group    md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                            <span class="p-5 rounded-full bg-teal-500 text-white shadow-lg shadow-teal-200">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg> --}}
                                <i class="fa-sharp fa-solid fa-sliders fa-2xl" style="color: #eaecf1;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Parámetros del Sistema</p>
                            <p class="mt-2 text-sm text-slate-500">Configure valores y metricas para ser utilizadas
                                dentro el proceso de cálculo del sistema.</p>
                        </div>

                       

                    @can('capataz.modificar.cosecha')
                        <div
                            class="p-10 flex flex-col items-center text-center group     hover:bg-slate-50 cursor-pointer">
                            <span class="p-5 rounded-full bg-indigo-500 text-white shadow-lg shadow-indigo-200">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg> --}}
                                <i class="fa-sharp fa-solid fa-clipboard fa-2xl" style="color: #eeeff1;"></i>
                            </span>
                            <p class="text-xl font-medium text-slate-700 mt-3">Cosechar</p>
                            <p class="mt-2 text-sm text-slate-500">Realizar Cosechas de las Planificaciones asignadas.
                            </p>
                        </div>
                    @endcan



                    </div>

                    {{-- <div
                        class="w-full   bg-indigo-600 shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center">
                        <p class=" text-white"> <span class="text-4xl font-medium">Still Confused ?</span> <br>
                            <span class="text-lg">Book For Free Career Consultation Today ! </span>
                        </p>
                        <button
                            class="px-5 py-3  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400">BOOK
                            AN APPOINTMENT </button>
                    </div> --}}

                    {{-- </div> --}}
                    <!-- contenido -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>