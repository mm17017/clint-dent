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
                    <a href="home?var=citas">Ir a citas</a>

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


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 active" src="{{asset('images/c1.png')}}" alt="slide 1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/c2.png')}}" alt="slide 2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/c3.png')}}" alt="slide 3">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/c4.png')}}" alt="slide 4">
                </div>
                <div class="carousel-item">
                    <a href="/home">
                    <img class="d-block w-100" src="{{asset('images/c5.png')}}" alt="slide 5">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h1 class="content sobre-nosotros-titulo-h1" style="color: #0f3443 !important;">¿Quiénes Somos?</h1>

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
        <h1 class="content sobre-nosotros-titulo-h1" style="color: #0f3443 !important;">Nuestros Servicios</h1>
        <table class="table table-hover table-sm table-striped table-bordered" style="text-align: center; font-size: 1.2rem;">
            <thead class="" style="font-size: 1.4rem; background-color: #0f3443; color:white;">
                <tr>
                    <th scope="col">Código de Servicio</th>
                    <th scope="col">Descripción del Servicio</th>
                    <th scope="col">Precio del Servicio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Limpieza Dental</td>
                    <td style="color: green; font-weight: bold;">$35.00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Resina Dental</td>
                    <td style="color: green; font-weight: bold;">$40.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Endodoncia</td>
                    <td style="color: green; font-weight: bold;">$155.00</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Coronas Dentales</td>
                    <td style="color: green; font-weight: bold;">$285.00</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Implantes Dentales</td>
                    <td style="color: green; font-weight: bold;">$800.00</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Extracción</td>
                    <td style="color: green; font-weight: bold;">$50.00</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Guarda Oclusal</td>
                    <td style="color: green; font-weight: bold;">$75.00</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Puentes Dentales</td>
                    <td style="color: green; font-weight: bold;">$860.00</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Brackets Tradicionales</td>
                    <td style="color: green; font-weight: bold;">$335.00</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Brackes Estéticos</td>
                    <td style="color: green; font-weight: bold;">$675.00</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Brackets Autoligados</td>
                    <td style="color: green; font-weight: bold;">$575.00</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Invisaling</td>
                    <td style="color: green; font-weight: bold;">$1255.00</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Blanqueamiento Dental</td>
                    <td style="color: green; font-weight: bold;">$200.00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<footer class="footer">
    <div class="flex-footer">
        <div class="parrafo">
            <p class="">Calle 15 de Septiembre, local #22, Metapan, Santa Ana, El Salvador</p><br>
            <p class="">Tel: 2440-6578</p><br>
            <p class="">Email: info@clintdent.com</p>
        </div>
        <p class="">Clint-Dent - Todos los derechos reservados&copy;</p>
    </div>
</footer>

</html>