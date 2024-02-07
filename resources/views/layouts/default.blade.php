<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/typed.js'])
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }}</title>

</head>

<body class="bg-gray-200">

    @include('components.nav')
    @yield('content')
    @include('vendor.lara-izitoast.toast')
    <script src="{{ asset('js/iziToast.js') }}"></script>
</body>

</html>
