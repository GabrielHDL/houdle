<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- --------- Scroll Reveal Library --------- -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- --------- CSS Files --------- -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="./css/style.css">

        @livewireStyles
    </head>
    <body>
        <div class="overlay"></div>
            @livewire('navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        @stack('modals')

        @livewireScripts
        <!-- JavaScript Files -->

        <x-footer />

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="{{asset('js/mixitup.min.js')}}"></script>
        <script src="{{asset('js/app_custom.js')}}"></script>
    </body>
</html>
