<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="max-age=604800">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{config('app.name')}}</title>
    <link href="{{ asset('frontend/images/favicon/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <!-- Scripts -->

    <!-- Styles -->
    @include('partials.frontend._css')
    @yield('css')
</head>
<body>
    <div id="app">
        @include('partials.frontend._header')
        @yield('navbar')

        @yield('content')
    
    </div>
    @include('partials.frontend._footer')
    @include('partials.frontend._javascript')
    @yield('javascript')
</body>
</html>
