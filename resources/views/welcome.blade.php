<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLINT-DENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <header class="imagen-header padding-bottom">
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

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/c1.jpg')}}" class="d-block w-100 h-75" alt="1.jpg">
                </div>
                
                <div class="carousel-item ">
                    <img src="{{asset('images/c2.jpg')}}" class="d-block w-100 h-75" alt="2.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c3.jpg')}}" class="d-block w-100 h-75" alt="3.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c4.jpg')}}" class="d-block w-100 h-75" alt="4.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c5.jpg')}}" class="d-block w-100 h-75" alt="5.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c6.jpg')}}" class="d-block w-100 h-75" alt="6.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c7.png')}}" class="d-block w-100 h-75" alt="7.png">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c9.jpg')}}" class="d-block w-100 h-75" alt="9.jpg">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/c11.jpg')}}" class="d-block w-100 h-75" alt="11.jpg">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>













        <h1 class="content sobre-nosotros-titulo-h1">¿Quiénes Somos?</h1>

        <div class="">


            <div class="sobre-nosotros--texto">
                <p>Somos un equipo de Odontólogos Profesionales especializados en la Alta Estética Dental. Nuestra Clínica cuenta con la más sofisticada tecnología que nos permite ofrecer servicios de vanguardia. Nos caracterizamos por nuestra experiencia, calidad y profesionalismo.Nos especializamos en varias ramas relacionadas a la ortodoncia.</p>
                <p></p>
                <p>Utilizamos materiales de la más alta calidad; contamos con una área de esterilización,teniendo así un mejor control de infecciones y utilizamos material descartable. Nuestro trabajo se realiza con un proceso de diagnóstico exhaustivo, cumpliendo con los más altos estándares exigidos por la American Association of Orthodontists (AAO).</p>
                <p></p>
                <p>Realizamos un procedimiento de diagnóstico computarizado que actualizamos anualmente, logrando mayor rapidez y exactitud; permitiendo mostrar los cambios esperados del tratamiento antes de ser realizados, y con ello mostrar como lucirán tus dientes con los diferentes tipos de aparatos antes de ser colocados y muchas ventajas adicionales.</p>
                <p></p>
                <p>Para nosotros lo más importante es el cuidado del paciente en forma integral.</p>
            </div>
        </div>
    </div>


</body>
<footer class="footer">
    <p class="flex-center">Calle 15 de Septiembre, local #22, Metapan, Santa Ana, El Salvador</p>

    <p class="flex-center">Tel: 2440-6578</p>
    <p class="flex-center">Email: info@clintdent.com</p>
    <p class="flex-center">Clint-Dent - Todos los derechos reservados&copy;</p>

</footer>

</html>