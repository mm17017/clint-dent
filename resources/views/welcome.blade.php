<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clint-Dent</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #cff4d2;
            color: #205072;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .color-blanco{
            color:#fff;
        }
        .full-height {
            height: 100vh;
        }

        .titulos{

        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 20px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links a:hover{
            color: #205072;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .container-logo {
            /* max-width: 100%; */
            width: auto;
            height: auto;
            max-width: 40px;
            max-height: 40px;
        }

        /* .space{
                justify-content: space-between;
            } */
        .top-left {
            position: absolute;
            left: 50px;
            top: 0px;
        }

        .box {
            width: 100vw;
            height: 60px;
            background-color: #fff;
            position: absolute;
            top: 0px;
        }

        .contenedor {
            max-width: 1200px;
        }

        .logo-main {

            /* width: auto;
                height: auto; */
            width: 400px;
            height: 400px;
        }

        .sin-margen-top{
            padding-bottom: 0;
        }

        .formato-link{
            text-decoration: none;
        }
        .color-fondo-header {
            background-color: #000000;
        }
    </style>
</head>

<body>

    <div class="flex-center position-ref full-height">


        @if (Route::has('login'))
        <div class="box color-fondo-header">
            <div class="top-left sin-margen-top">
               <h3 class="color-blanco">C L I N T - D E N T</h3>
            </div>
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Iniciar Sesión</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrarse</a>
                @endif
                @endauth
            </div>
        </div>
        @endif

        <div class="content">
            <img class="logo-main" src="{{URL::asset('img/Logo.png')}}" alt="">

            <h1>Siempre Lo Mejor Para Tu Salud</h1>


            {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> 
                </div> --}}
        </div>
    </div>
</body>

</html>