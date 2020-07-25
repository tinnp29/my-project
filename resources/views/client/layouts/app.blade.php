<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'Hoa Mặt Trời')</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">

    <!-- Logo Title-->
    <link rel="icon" href="{{ asset('images/sunflower.svg') }}">
</head>
<body>
    <div id="app">
        @include('client.partials.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('client.partials.footer')
    </div>
</body>
</html>
