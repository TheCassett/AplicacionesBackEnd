<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Cafetería</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('menu') }}">Menú</a></li>
            <li><a href="{{ route('about') }}">Nosotros</a></li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
            <li><a href="{{ route('gallery') }}">Galería</a></li>

        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2025 Cafetería "El Peninsular". Todos los derechos reservados a su mi persona.</p>
    </footer>
</body>
</html>
