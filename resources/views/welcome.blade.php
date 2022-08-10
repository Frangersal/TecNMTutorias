<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tutorias ITA </title>
        <link href="{{asset('/css/TecNM/style.css')}}" rel="stylesheet">
        <link href="{{asset('/css/TecNM/home.css')}}" rel="stylesheet">
        
        <!-- Icono -->
        <link rel="icon" href="{{asset('/images/Icon.png')}}">

        <!-- Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #233D7B;
                font-family: 'Nunito', sans-serif, 'Copperplate-Gothic-Bold';
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #233D7B;
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
        </style>
        -->
    </head>
    <body class="body body-bg">
        <var class="body-caja">
            
        </var>
        <img class="body_img" src="{{asset('/images/Logo.png')}}" alt="Logotipo oficial de TecNM">

        <h1 class="body_h1">
            Tutorias ITA
        </h1>
        @if (Route::has('login'))
        <form class="body_from" action="">
            @auth
            <a class="body_from_input" href="{{ url('/perfil') }}">Perfil</a>
            @else
                <a class="body_from_input" href="{{ route('login') }}">Iniciar sesion</a>
                @if (Route::has('register'))
                    <a class="body_from_input" href="{{ route('register') }}">Registrarse</a>
                @endif
            @endauth
        </form>
        @endif
        
    </body>

</html>
