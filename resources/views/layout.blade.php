<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JDIH Hukum Pesawaran')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Jika Anda membutuhkan Meta tag atau favicon, tambahkan di sini -->
</head>
<body>
    <header>
        <!-- Tambahkan navbar atau header lainnya di sini -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Tambahkan footer di sini -->
    </footer>
</body>
</html>
