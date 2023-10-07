<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/Funciones.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @push('scripts')
        <script src="{{ asset('js/FuncionaesEmergentes.js') }}"></script>
    @endpush

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/fontawesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/brands.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/solid.css') }}" rel="stylesheet">





        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    <!-- Styles -->
    @livewireStyles
    <!-- @include('sweetalert::alert') -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        $(document).ready(function() {
            $('#myTable3').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
     <script>
        $(document).ready(function() {
            $('#myTable55').DataTable();
        });
    </script>
    <script>
        function EliminarSolicitudCliente(id) {
            //alert(id);
            $('#fila' + id).remove();
            var totalkilos = 0
            var KilosMatriz = [];
            var valor = $('#valoreskilos').val();
            $('#valoreskilos').each(function() {
                KilosMatriz.push($(this).val());
            });
            //alert(KilosMatriz);


            for (i = 0; i < KilosMatriz.length; i++) {
                totalkilos = parseFloat(totalkilos) + parseFloat(KilosMatriz[i]);
            }
            $('#totadekilos').val(totalkilos);
            Swal.fire(
                'Exportadora',
                'Exportadora Eliminada de la lista!',
                'success'
            )
        }

        function EliminarContratista(id) {
            //alert(id);
            $('#filas' + id).remove();
            Swal.fire(
                'Contratista',
                'Contratista Eliminado de la lista!',
                'success'
            )
        }
    </script>

</head>

<body class="font-sans antialiased">

    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ Session::get('error') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
    @stack('modals')

    @livewireScripts
</body>

</html>
