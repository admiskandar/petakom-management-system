<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles



    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.ico') }}">

    <link href="{{ asset('build/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/plugins/filter/magnific-popup.css') }}" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/metisMenu.min.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}" <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('build/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <!-- Responsive datatable examples -->
    <link rel="stylesheet" href="{{ asset('build/assets/plugins/datatables/responsive.bootstrap4.min.css') }}">
    <!-- Sweet Alert -->
    <link href="{{ asset('build/assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('build/assets/plugins/animate/animate.css')}}" type="text/css">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('build') }}/assets/images/fk.png">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('build') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('build') }}/assets/css/icons.css">
    <link rel="stylesheet" href="{{ asset('build') }}/assets/css/metisMenu.min.css">
    <link rel="stylesheet" href="{{ asset('build') }}/assets/css/style.css">

    <!-- calendar css -->
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/core/main.css">
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/core/main.css" />
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/daygrid/main.css" />
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/bootstrap/main.css" />
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/timegrid/main.css" />
    <link rel="stylesheet" href="{{ asset('build') }}/assets/plugins/fullcalendar/packages/list/main.css" />

    <!-- calendar css -->



</head>

<body class="font-sans antialiased">
    <x-jet-banner />

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

    @stack('modals')

    @livewireScripts
    <!-- jQuery  -->

    <script src="{{ asset('build/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/waves.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('build/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('build/assets/pages/jquery.analytics_dashboard.init.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('build/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/peity-chart/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('build/assets/pages/jquery.ana_customers.inity.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('build/assets/js/app.js') }}"></script>
    <!-- jQuery  -->
    <script src="{{ asset('build') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('build') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('build') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('build') }}/assets/js/waves.min.js"></script>
    <script src="{{ asset('build') }}/assets/js/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('build') }}/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('build') }}/assets/pages/jquery.analytics_dashboard.init.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/moment/moment.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/fullcalendar/packages/core/main.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/fullcalendar/packages/daygrid/main.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/fullcalendar/packages/timegrid/main.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/fullcalendar/packages/interaction/main.js"></script>
    <script src="{{ asset('build') }}/assets/plugins/fullcalendar/packages/list/main.js"></script>
    <!-- <script src="{{ asset('build') }}/assets/pages/jquery.calendar.js"></script> -->

    <!-- App js -->
    <script src="{{ asset('build') }}/assets/js/app.js"></script>

    <script src="{{ asset('build/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('build/assets/pages/jquery.form-upload.init.js') }}"></script>

    <script src="{{ asset('build/assets/plugins/filter/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/filter/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/filter/query.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('build/assets/pages/jquery.gallery.inity.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('build/assets/js/app.js') }}"></script>


    <script src="{{ asset('build/assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <!-- <script src="{{ asset('build/assets/pages/jquery.sweet-alert.init.js')}}"></script> -->
</body>

</html>

</body>

</html>

