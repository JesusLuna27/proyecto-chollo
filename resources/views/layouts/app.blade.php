<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollo Ofertas</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Chollo ░▒▓ Ofertas</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/index') }}">Chollos Disponibles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/chollos/create') }}">Subir Chollo</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center p-3">
        ©CholloOfertas {{ date('Y') }} | Jesus Luna Dominguez
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
