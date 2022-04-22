<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Houdle®') }} @yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- favicon --}}
        <link rel="icon" href="{{asset('favicons/favicon32x32.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('favicons/favicon192x192.png')}}" sizes="192x192" />

        <meta name="theme-color" content="#F7583A">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
