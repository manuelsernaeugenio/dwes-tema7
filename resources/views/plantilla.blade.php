<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('titulo')</title>
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <header>
            <h1>Festival de cortos</h1>
            <h2>Muy pronto</h2>
        </header>

        @include('partials.nav')

        <main>@yield('contenido')</main>

        <footer>
            <small>&copy; DWES - Cortos</small>
        </footer>
    </body>
</html>
