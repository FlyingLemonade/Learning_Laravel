<!doctype html>
<html class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/style.css') }}">
    </link>

</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    <script src="{{ asset(path: 'js/script.js') }}"></script>
</body>

</html>