<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    
    <!-- Memanggil File CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <!-- Memanggil File Gambar / Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo Aplikasi" width="100">
        <h1>Website PHP Native Hore</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Memanggil File JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>