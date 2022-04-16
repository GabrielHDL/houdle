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

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- TrustBox script -->
        <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
        <!-- End TrustBox script -->

        {{-- favicon --}}
        <link rel="icon" href="{{asset('favicons/favicon32x32.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('favicons/favicon192x192.png')}}" sizes="192x192" />

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
