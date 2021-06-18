@extends('layouts.app')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div class="container" style="height: auto; min-height:100vh">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-body contenedor sombra gradiente-form col-form-label">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="componente">
                        {{-- <reserva-component /> --}}
                        
                        @php
                        try {
                            $codigo = "citas";
                            if($_GET["var"]!=null){
                                $codigo = $_GET["var"];
                            }else {
                                $codigo = "citas";
                            }
                        } catch (\Throwable $th) {
                            
                        }
                        @endphp
                        <home-component :codigo='{{json_encode($codigo)}}'/>
                        
                    </div>
                    <!-- <div class="sesion">
                        <p class="text-left align-content-lg-around">
                            Bienvenido: {{ Auth::user()->name_usuario }}
                        </p>
                    </div> -->

                </div>


            </div>
            {{-- <example-component/> --}}
        </div>
    </div>
</div>
@endsection