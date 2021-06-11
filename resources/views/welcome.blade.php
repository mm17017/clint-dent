<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<!-- Styles -->
<style>

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLINT-DENT</title>
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    <header class="imagen-header">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="box color-fondo-header">
                <div class="top-left sin-margen-top">
                    <h3 class="color-blanco">C L I N T - D E N T</h3>
                </div>
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Ir a citas</a>

                    @else
                    <a href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                    @endif
                    @endauth
                </div>
                <div class="content">
                    <h1 class="cover-h1">C L I N T - D E N T</h1>
                    <h3 class="cover-h3">Siempre lo mejor para tu salud</h3>
                </div>
            </div>
            @endif
    </header>

    <div class="contenedor sombra">
        <h1 class="content sobre-nosotros-titulo-h1">¿Quiénes Somos?</h1>

        <div class="sobre-nosotros">
            <div class="imagen-nosotros"></div>
            <div class="sobre-nosotros--texto">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum ullam alias voluptatem voluptatibus
                    omnis quas expedita sunt illo incidunt, porro nisi corrupti ipsum architecto mollitia quisquam perspiciatis
                    maiores temporibus voluptates.
                </p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum ullam alias voluptatem voluptatibus
                    omnis quas expedita sunt illo incidunt, porro nisi corrupti ipsum architecto mollitia quisquam perspiciatis
                    maiores temporibus voluptates.
                </p>
            </div>
        </div>
    </div>


</body>
<footer class="footer">
    <p class="flex-center">Calle 15 de Septiembre, Metapan, Santa Ana, El Salvador</p>
    <p class="flex-center">Clint-Dent - Todos los derechos reservados&copy;</p>
    <p class="flex-center">Tel: 24402566</p>
</footer>

</html>