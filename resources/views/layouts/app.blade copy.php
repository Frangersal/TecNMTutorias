<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perfil</title>

    <!-- Archivo CSS Bootstrap 5 -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('/css/TecNM/users.css')}}" rel="stylesheet">

    <!-- Icono -->
    <link rel="icon" href="{{asset('/images/Icon.png')}}">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
    <title>{{ config('app.name', 'TNM Tutorias') }}</title>
    -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 -->
    <!-- Styles -->
    <!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->
    <!-- Menu shit -->
    <!-- 
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/menucss/style.css">
         -->
    <!-- End Menu shit -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #233D7B;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     <!--{{ config('app.name', 'TNM Tutorias') }} -->
                    TecNM Tutorias
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion.') }}</a> 
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse.') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
                                    
                                    @can('manage-users')
                                    <a class = "dropdown-item" href="{{ route('admin.users.index') }}">
                                        Administrar Usuarios
                                    </a>
                                    
                                    <a class = "dropdown-item" href="{{ route('admin.forms.index') }}">
                                        Administrar Formularios
                                    </a>

                                    <a class = "dropdown-item" href="{{ route('admin.questions.index') }}">
                                        Administrar Preguntas
                                    </a>
                                    @endcan

                                    @can('student-action')
                                    <a class = "dropdown-item" href="{{ route('student.forms.index') }}">
                                        Lista de Formularios
                                    </a>
                                    @endcan

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

@guest
@if (Route::has('register'))
<!-- Si aun no se ha iniciado sesion--->
<div id="content" class="p-4 p-md-5 pt-5" style="background-color:lavender;">
    <main class="py-4">
            @yield('content')
    </main>
</div>
@endif
@else


<!-- Inicio del menu con una sesion iniciada  --->
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary" style="background-color: #233D7B;"></button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url({{ asset('images/bg_1.jpg') }});">
            
                <div class="user-logo">
                    <div class="img" style="background-image: url({{ asset('images/foto.jpg') }});"></div>
                    <h3><kbd> {{ Auth::user()->name }} </kbd> </h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5" >
            
            
                <!-- Acciones para TODOS-->
                <li class="active"><a href="{{ url('/') }}"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="{{ url('/perfil') }}"><i class="fas fa-user"></i>  Perfil</a></li>
                
                <!-- Acciones de Administrador-->
                @can('admin-action')
                
                @endcan

                @can('manage-users')
                <!-- Acciones para Admin y Tutor-->
                <li><a href="{{ route('users.tutor.index') }}"><i class="fas fa-chalkboard-teacher"></i>  Tutores</a></li>
                <li><a href="{{ route('users.pupil.index') }}"><i class="fas fa-users"></i>  Pupilos</a></li>
                <li><a href="{{ route('users.pupil.index') }}"><i class="fas fa-address-card"></i>  Formularios</a></li>
                <li><a href="{{ route('admin.questions.index') }}"><i class="fas fa-question-circle"></i>  Preguntas</a></li> 
                <li><a href="{{ route('admin.chart.index') }}"><i class="fas fa-chart-bar"></i>  Estadisticas</a></li> 
                @endcan

                <!-- Acciones de Estudiante-->
                @can('student-action')
                <li><a href="{{ route('student.forms.index') }}"><i class="fas fa-address-card"></i>  Formularios alum</a></li>                
                <!-- <li><a href="{{ route('student.answers.index') }}"><i class="fas fa-question-circle"></i>  Preguntas</a></li>  -->
                
                @endcan


                <!-- Acciones para TODOS-->
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt" ></i>{{ __('Cerrar sesion') }}
                    </a>
                </li>
                
                
            </ul>
        </nav>
        <script src="/menujs/jquery.min.js"></script>
        <script src="/menujs/popper.js"></script>
        <script src="/menujs/bootstrap.min.js"></script>
        <script src="/menujs/main.js"></script>
        
            <!-- Page Content class=""> -->
        <div id="content" class="p-4 p-md-5 pt-5" style="background-color:lavender;">
            <main class="py-4" >
                    @yield('content')
                    
            </main>
        </div>
    </div>

<!-- Fin del menu sin una sesion iniciada --->

@endguest

</body>
</html>
