<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- flickty -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        <script>
            if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
                document.querySelector('html').classList.add('dark');
            } else {
                document.querySelector('html').classList.remove('dark');
            }
        </script>
    </head>
    <body class="font-sans antialiased transition duration-300 ease-in-out dark:bg-dark dark:text-white-text">
        <div class="flex flex-col overflow-hidden min-h-screen">
            <!-- Page Heading -->
            <x-sections.header />

            <!-- Page Content -->
            {{ $slot }}
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
