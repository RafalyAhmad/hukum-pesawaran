<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JDIH Hukum Pesawaran')</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @yield('content')

    @yield('scripts')
    @vite('resources/js/app.js')
</body>
</html>
