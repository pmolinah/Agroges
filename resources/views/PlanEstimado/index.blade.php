<x-dashBoard>
    <div class="py-10 mt-20 mb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-left m-1">
                <div class="p-1 w-56 rounded-full bg-white shadow"><i class="fa-solid fa-building mr-3 ml-3"></i><label
                        class="font-bold">Estimaciones de Cosecha</label></div>

            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto w-5/5 p-3 px-3 overflow-hidden">
                    <a href="{{ route('Create.plan') }}">
                        <button type="button"
                            class="bg-gray-700 text-white font-bold py-2 px-4 rounded hover:bg-gray-600">
                            Nueva Estimación
                        </button>
                        <!-- @can('Admin.Usuario.Nuevo')
    -->
                            <!--
@endcan -->
                    </a>
                    <!-- tabla Usuarios -->
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead
                                            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-300">
                                            <tr class="font-light">
                                                <th scope="col" class="px-6 py-4">Observación</th>
                                                <th scope="col" class="px-6 py-4">Campo</th>
                                                <th scope="col" class="px-6 py-4">Cuartel</th>
                                                <th scope="col" class="px-6 py-4">Especie</th>
                                                <th scope="col" class="px-6 py-4">Kilos Planificados</th>
                                                <th scope="col" class="px-6 py-4">Kilos Actuales</th>
                                                <th scope="col" class="px-6 py-4">Representación</th>
                                                {{-- <th scope="col" class="px-6 py-4">Inhabilitar</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($PlanEstimadosAct as $planEstimada)
                                                <tr
                                                    class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-200">
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->planificacionEstimada }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->campo->campo }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->cuartel->observaciones }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->especie->especie }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->cantidad }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $planEstimada->KilosActuales }}
                                                    </td>
                                                    <td>
                                                        <!-- component -->
                                                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

                                                        @if ($planEstimada->KilosActuales == 0)
                                                            @php
                                                                $porc = 0;
                                                                $porc = intVal($porc);
                                                            @endphp
                                                        @else
                                                            @php
                                                                $porc = ($planEstimada->KilosActuales / $planEstimada->cantidad) * 100;
                                                                $porc = intVal($porc);
                                                            @endphp
                                                        @endif
                                                        <div class=" m-7 flex items-center px-5 bg-white shadow-xl rounded-2xl h-20"
                                                            x-data="{ circumference: 50 * 2 * Math.PI, percent: {{ $porc }} }">
                                                            <div
                                                                class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
                                                                <svg class="w-32 h-32 transform translate-x-1 translate-y-1"
                                                                    x-cloak aria-hidden="true">
                                                                    <circle class="text-gray-300" stroke-width="10"
                                                                        stroke="currentColor" fill="transparent" r="50"
                                                                        cx="60" cy="60" />
                                                                    <circle
                                                                        class="@if ($porc < 50) text-red-700 @else text-blue-700 @endif"
                                                                        stroke-width="10"
                                                                        :stroke-dasharray="circumference"
                                                                        :stroke-dashoffset="circumference - percent / 100 *
                                                                            circumference"
                                                                        stroke-linecap="round" stroke="currentColor"
                                                                        fill="transparent" r="50" cx="60"
                                                                        cy="60" />
                                                                </svg>
                                                                <span
                                                                    class="absolute text-2xl @if ($porc < 50) text-red-700 @else text-blue-700 @endif"
                                                                    x-text="`${percent}%`"></span>
                                                            </div>
                                                            <p class="ml-10 font-medium text-gray-600 sm:text-xl">
                                                                Cosechado de</p>

                                                            <span
                                                                class="ml-auto text-xl font-medium @if ($porc < 50) text-red-700 @else text-blue-700 @endif hidden sm:block">T:{{ $planEstimada->cantidad }}K</span>
                                                        </div>
                                                        <div class="fixed bottom-5 right-5 flex items-center space-x-4">
                                                            <a href="https://twitter.com/ak_kamona" target="_blank"
                                                                class="transition-transform transform">
                                                                <span class="sr-only">Twitter</span>
                                                                <svg aria-hidden="true" class="w-4 h-4 text-blue-500"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                                                    </path>
                                                                </svg>
                                                            </a>

                                                        </div>
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
</x-dashBoard>
