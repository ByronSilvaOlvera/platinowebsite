<!DOCTYPE html>
<html lang="es">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>{{ ( $pageTitle ) ? $pageTitle . ' | ' : '' }}Admin - Platino Marketing Promocional</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/vendor.js') }}"></script>
</head>
<body class="{{ $pageBody OR '' }}">
    @include('Admin.layout.header')
    @yield('content')
    @include('Admin.layout.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>