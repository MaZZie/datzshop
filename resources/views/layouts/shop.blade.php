<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100;400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/shop.css') }}">

        @livewireStyles


    </head>
        <body class="bg-white font-sans text-gray-600 work-sans leading-normal text-base tracking-normal">
        <x-jet-banner />

        <div>
            @livewire('header-menu')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @livewire('footer')
        </div>

        @stack('modals')
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @livewireScripts
    </body>
</html>
