@extends('layouts.app')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<h1 class="h1-inicio">
    Bienvenido a nuestro sistema de reserva en línea
</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-body contenedor sombra gradiente-form col-form-label">
                    <h2 class="text-center padding-bottom color-blanco">Reserva tu cita</h2>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="componente">
                        <reserva-component />
                    </div>
                    <!-- <div class="sesion">
                        <p class="text-left align-content-lg-around">
                            Bienvenido: {{ Auth::user()->name_usuario }}
                        </p>
                    </div> -->

                </div>


            </div>
        </div>
    </div>
</div>
@endsection