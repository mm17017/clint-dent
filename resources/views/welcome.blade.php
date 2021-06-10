<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<!-- Styles -->
<style>
    html,
    body {
        background-color: #fff;
        color: #205072;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .color-blanco {
        color: #fff;
    }

    .full-height {
        height: 100vh;
    }

    .titulos {}

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

    .links a:hover {
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
        top: 20px;
    }

    .box {
        display: block;
        text-align: center;
        width: 100vw;
        height: 60px;
        background-color: #fff;
        position: absolute;
        top: 0px;
        padding-top: 4rem;
    }

    .contenedor {
        max-width: 120rem;
    }

    .logo-main {

        /* width: auto;
                height: auto; */
        width: 400px;
        height: 400px;
    }

    .sin-margen-top {
        padding-bottom: 0;
    }

    .formato-link {
        text-decoration: none;
    }

    .color-fondo-header {
        background-color: transparent;
    }

    .cover-h1 {
        margin-top: 5rem;
        font-size: 10rem;
        color:  #2ca880;
        font-weight: 900;
        text-align: center;


    }

    .cover-h3 {
        font-size: 3rem;
        color: #205072;
        font-weight: 500;
        text-align: center;
        margin-top: 5rem;

    }


    .footer {
        background-color: black;
        color: blanchedalmond;
        font-size: 1.2rem;
        width:100vw;
        
    }
    .contenedor {
        max-width: 120rem;
        width: 90%;
        width: min(90%, 120rem);
        margin: 0 auto;
        padding-bottom: 4rem;
    }
    .sobre-nosotros{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
    }
    .sobre-nosotros--texto{
        margin-top: 0;
        font-size: 1.8rem;
        text-align: justify;
    }
    .sobre-nosotros-titulo-h1{
    
        margin-top: 3rem;
        margin-bottom: 3rem;
        color: black;
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 1000;
    }
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

    <div class="contenedor">
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