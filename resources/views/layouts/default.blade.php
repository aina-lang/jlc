<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/typed.js'])
    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-gray-200">
    @include('components.nav')
    @include('sweetalert::alert')
    @yield('content')

</body>

</html>
