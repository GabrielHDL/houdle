<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','G-GXJVMGBLGL');
        </script>
            <!-- End Google Tag Manager -->

         {{-- Open Graph --}}
         <meta name="Description" content="Agencia digital creativa de experiencias únicas especializada en identidad visual, verbal y estrategia de marca. Para el diseño y personalidad de tu empresa." />
         <meta property="og:title" content="Houdle®" />
         <meta property="og:type" content="website" />
         <meta property="og:description" content="Agencia digital creativa de experiencias únicas especializada en identidad visual, verbal y estrategia de marca. Para el diseño y personalidad de tu empresa." />
         <meta property="og:url" content="{{Request::url()}}" />
         <meta property="og:site_name" content="Houdle®" />
         <meta property="og:image" content="{{asset('assets/open_houdle.jpg')}}" />
         <meta propety="og:image:alt" content="{{ config('app.name', 'Houdle®') }} Open Graph image" />
         <meta property="fb:pages" content="100277535076254" />
         <meta property="fb:app_id" content="1195304784167838" />
         <meta property="og:locale" content="es_MX">
         <meta name="twitter:title" content="Houdle®">
         <meta name="twitter:description" content="Agencia digital creativa de experiencias únicas especializada en identidad visual, verbal y estrategia de marca. Para el diseño y personalidad de tu empresa.">
         <meta name="twitter:image" content="{{asset('assets/open_houdle.jpg')}}">
         <meta name="twitter:site" content="houdlemx">
         <meta name="twitter:creator" content="houdlemx">
 
         {{-- Theme Color --}}
         <meta name="theme-color" content="#F3F5F6">

        <title>{{ config('app.name', 'Houdle®') }}</title>

        <!-- --------- Scroll Reveal Library --------- -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- --------- CSS Files --------- -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="./css/style.css">
        @if (error)
            
        @endif
        <link rel="stylesheet" href="./css/app.css">

        {{-- FontAwesome --}}
        <script src="https://kit.fontawesome.com/bf31e6c9ae.js" crossorigin="anonymous"></script>

        <!-- TrustBox script -->
        <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
        <!-- End TrustBox script -->

        {{-- favicon --}}
        <link rel="icon" href="{{asset('favicons/favicon32x32.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('favicons/favicon192x192.png')}}" sizes="192x192" />

        @livewireStyles
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=G-GXJVMGBLGL"
                    height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
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
