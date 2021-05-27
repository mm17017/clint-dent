<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ClintDent</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #cff4d2;
                color: #205072;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .links > a {
                color: #329d9c;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container-logo{
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
                left: 10px;
                top: 10px;
            }
            .box{
                width: 100vw;
                height: 60px;
                background-color: #fff;
                position: absolute;
                top: 0px;
            }
            .contenedor{
                max-width: 1200px;
            }
            .logo-main{
                
                /* width: auto;
                height: auto; */
                width: 400px;
                height: 400px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            

                @if (Route::has('login'))
                    <div class="box">
                        <div class="top-left ">
                            <img class="container-logo" src="{{URL::asset('img/ClintDent.png')}}" alt="">
                        </div>
                        <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
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
