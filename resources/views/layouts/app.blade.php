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

        <!-- App css -->
        <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/css/icons.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/css/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">

        <!-- App favicon -->
        <link href="{{ asset('build/assets/images/favicon.ico') }}">

        <link href="{{ asset('build/assets/plugins/dropify/css/dropify.min.css"') }}">

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

        <script src="{{ asset('build/assets/plugins/dropify/js/dropify.min.js') }}"></script>
        <script src="{{ asset('build/assets/pages/jquery.form-upload.init.js') }}"></script>

        <script src="{{ asset('build/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('build/assets/pages/jquery.analytics_dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('build/assets/js/app.js') }}"></script>


    </body>
</html>
