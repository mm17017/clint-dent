@extends('layouts.app')

@section('content')
<div class="contenedor-inicio sombra">
    <h1 class="h1-inicio">Todo lo que quieras en nuestra clínica</h1><br>
    <div class="blog">
        <div class="texto">
            <h3 class="h3-inicio">Nuestros 26 años de experiencia y profesionalismo, nuestras constantes actualizaciones y avances en
                odontopediatría nos permite ofrecer a nuestros pacientes restablecer su
                salud oral en un ambiente agradable en donde se mezcla el profesionalismo con la odontología amigable.
                Nos especializamos en odontología infantil.
                Utilizamos materiales de la más alta calidad.
                Contamos con una área de esterilización como en hospitales,teniendo así un mejor control de infecciones y utilizamos material descartable.
                Para nosotros lo más importante es el cuidado del paciente en forma integral.
            </h3>

        </div>
        <div class="imagen">
            <img src="{{asset('img/inicio-1.webp')}}" alt="inicio">
        </div>
    </div>
    <br>
    <br>
    <h1 class="h1-inicio">Nuestra Información</h1>
    <br>
    <br>
    <div class="servicios">
        <section class="servicio">
            <h3 class="h4-inicio">Ubicación</h3>
            <div class="iconos">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
            </div>
            <p>Calle 15 de Septiembre, local #22, Metapan, Santa Ana, El Salvador
            </p>

        </section>
        <section class="servicio">
            <h3 class="h4-inicio">Teléfono</h3>
            <div class="iconos">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    <path d="M15 7a2 2 0 0 1 2 2" />
                    <path d="M15 3a6 6 0 0 1 6 6" />
                </svg>

            </div>
            <p>2440-6578
            </p>
        </section>
        <section class="servicio">
            <h3 class="h4-inicio">Correo Electrónico</h3>
            <div class="iconos">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
            </div>
            <p>info@clintdent.com
            </p>
        </section>
    </div>
    <br>
    <br>

    <h1 class="h1-inicio">Nuestra principal característica</h1>
    <br>
    <br>
    <div class="blog">
        <div class="texto">
            <h3 class="h3-inicio">
                Nuestra Clínica Odontológica, cuenta con una amplia serie de especialidades odontológicas,
                para un diagnóstico y tratamiento correcto desde el comienzo de la consulta dental.
                <br>
                Somos una clínica que vela por el bienestar de nuestros clientes, para eso tenemos un servicio de
                RESERVA EN LÍNEA.
                <br>
                <br>
                <span style="font-size: 3rem;"> Puedes reservar tú cita </span>
            </h3>
            <br>
            <div class="boton btn-primary">
                <a href="home?var=reserva">Reserva tu cita</a>
            </div>

        </div>
        <div class="imagen">
            <img src="{{asset('img/inicio-2.png')}}" alt="inicio">
        </div>

    </div>
    <servicios-component/>


</div>

@endsection