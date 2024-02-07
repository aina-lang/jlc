<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/typed.js'])

    <title>{{ config('app.name') }}</title>
    @toastifyCss
    @toastifyJs
</head>

<body class="bg-gray-200">
    <script>toastify()->success('Your action was successful!');</script>
    @include('components.nav')
    @yield('content')
</body>

</html>
