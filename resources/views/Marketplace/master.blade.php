<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PQVV3Q8');</script>
    <!-- End Google Tag Manager -->
    <base href="/">
    <meta charset="UTF-8">
    <title>{{ ( $pageTitle ) ? $pageTitle . ' - ' : '' }}Platino Marketing Promocional</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- EXTERN APP -->
    <link rel="stylesheet" href="{{ mix('css/vendor-extern.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app-extern.css') }}">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ ( $pageTitle ) ? $pageTitle . ' - ' : '' }}Platino Marketing Promocional" />
    <meta property="og:description" content="Incrementamos el consumo de marcas o desarrollamos los canales de distribución de productos y servicios de empresas nacionales y multinacionales." />
    <meta property="og:site_name" content="PlatinoMarketing" />
    <meta property="og:locale:alternate" content="es_ES" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="https://www.platinomkt.com/imgs/image-ogp-1200-630.jpg" />
    <meta property="og:updated_time" content="1563203400" />
</head>
<body class="{{ isset( $pageBody ) ? $pageBody : '' }}">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQVV3Q8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('Marketplace.layout.header')
    @yield('content')
    @include('Marketplace.layout.footer')
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- EXTERN APP -->
    <script src="{{ mix('js/vendor-extern.js') }}"></script>
    <script src="{{ mix('js/app-extern.js') }}"></script>
    @yield('extraJs')
</body>
</html>