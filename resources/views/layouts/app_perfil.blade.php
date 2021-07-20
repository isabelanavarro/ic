<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token aquiiii linka o -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imgs/logo_ic.png" alt="MrBook" >
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ url('/livros/mostrar_livros')}}" class="nav-link">EXPLORAR</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ url('/avaliar')}}" class="nav-link">AVALIAR</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ url('/perfil') }}" class="nav-link">MEUS LIVROS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
 

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
