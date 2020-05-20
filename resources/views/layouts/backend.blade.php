<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="description" content="Ecommerce Backend.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pharoouzy">
    <meta property="twitter:creator" content="@pharoouzy">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ecommerce">
    <meta property="og:title" content="Ecommerce Backend">
    <meta property="og:url" content="https://github.com/Pharoouzy">
    <meta property="og:image" content="{{ asset('backend/images/appstore.png') }}">
    <meta property="og:description" content="Ecommerce Backend.">
    <title>@yield('title') - {{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="max-age=604800">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('storage/'.config('settings.site_favicon')) }}" rel="shortcut icon" type="image/x-icon">
    <!-- Scripts -->

    <!-- Styles -->
    @include('partials.backend._css')
    @yield('css')
</head>
<body class="app sidebar-mini">
    @yield('bars')

    @yield('content')

    @include('partials.backend._footer')
    @include('partials.backend._javascript')
    @yield('javascript')
</body>
</html>
