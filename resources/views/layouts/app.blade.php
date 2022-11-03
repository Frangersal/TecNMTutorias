<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perfil</title> 

    <!-- Diseño no Responsive DESCONTINUADO
    <link href="{{asset('/css/TecNM/users.css')}}" rel="stylesheet">
    <link href="{{asset('/css/TecNM/style.css')}}" rel="stylesheet">-->
    
    <!-- Diseño no Responsive -->
    
    <link href="{{asset('/css/TecNM-RD/core.css')}}" rel="stylesheet">
    <link href="{{asset('/css/TecNM-RD/layout.css')}}" rel="stylesheet">
    <link href="{{asset('/css/TecNM-RD/styleNav.css')}}" rel="stylesheet">
    <link href="{{asset('/css/TecNM-RD/styleMain.css')}}" rel="stylesheet"> 

    <!-- Archivo CSS Bootstrap 5 -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
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
<body class="body body-bg bodyWithOutNav">

@guest
@if (Route::has('register'))
<!-- Si aun no se ha iniciado sesion---> 
            @yield('content')  
@endif
@else

<!-- Inicio del menu con una sesion iniciada  --->
    <nav class="nav">
        <section class="nav_section-img">
            <img class="nav_img" src="{{asset('/images/foto.jpg')}}" alt="">
        </section>
        
        <section class="nav_section">
            <div class="nav_section_items-top">

                <!-- Acciones para TODOS-->

                <a class="nav_section_button button-top"  href="{{ url('/') }}">
                    <i class="nav_section_button_i fas fa-home"></i>  
                    <span class="nav_section_button_span">
                        Inicio
                    </span> 
                </a>
                <a class="nav_section_button" href="{{ url('/perfil') }}">
                    <i class="nav_section_button_i fas fa-user"></i>   
                    <span class="nav_section_button_span">
                        Perfil
                    </span> 
                </a>

                <!-- Acciones de Administrador-->
                @can('admin-action')
                    
                    <a class="nav_section_button" href="{{ route('users.tutor.index') }}">
                        <i class="nav_section_button_i fas fa-chalkboard-teacher"></i>  
                        <span class="nav_section_button_span">
                            Tutores                  
                        </span>  
                    </a>
                    <a class="nav_section_button"  href="{{ route('users.pupil.index') }}">
                        <i class="nav_section_button_i fas fa-users"></i>   
                        <span class="nav_section_button_span">
                            Pupilos                 
                        </span> 
                    </a>
            </div>
            <div class="nav_section_items-bottom">

                <!-- 
                <a class="nav_section_button"  href="{{ route('tutor.pupil.reunion.index') }}" >
                    <i class="nav_section_button_i fas fa-user-clock"></i>   
                    <span class="nav_section_button_span">
                        Reuniones               
                    </span> 
                </a>  
                -->              
                <a class="nav_section_button"  href="{{ route('admin.forms.index') }}">
                    <i class="nav_section_button_i fas fa-address-card"></i>   
                    <span class="nav_section_button_span">
                    Formularios 
                    </span> 
                </a>
                <!-- 
                <a class="nav_section_button"  href="{{ route('admin.questions.index') }}">
                    <i class="nav_section_button_i fas fa-question-circle"></i>   
                    <span class="nav_section_button_span">
                        Pregunta                    
                    </span> 
                </a> 
                -->  
                <a class="nav_section_button"  href="{{ route('admin.chart.index') }}">
                    <i class="nav_section_button_i fas fa-chart-bar"></i> 
                    <span class="nav_section_button_span">
                        Estadistica                
                    </span> 
                </a>      
                @endcan

                <!-- Acciones para Tutor-->
                @can('tutor-action')
                <a class="nav_section_button"  href="{{ route('users.pupil.index') }}">
                    <i class="nav_section_button_i fas fa-users"></i>   
                    <span class="nav_section_button_span">
                        Pupilos                 
                    </span> 
                </a>
            
            </div>
            <div class="nav_section_items-bottom">
                <a class="nav_section_button" href="{{ route('tutor.pupil.reunion.index') }}">
                    <i class="nav_section_button_i fas fa-user-clock"></i>   
                    <span class="nav_section_button_span">
                        Reuniones             
                    </span> 
                </a> 
                <a class="nav_section_button" href="{{ route('admin.chart.index') }}">
                    <i class="nav_section_button_i fas fa-chart-bar"></i> 
                    <span class="nav_section_button_span">
                        Estadistica                   
                    </span> 
                </a>  
                       
            @endcan

            <!-- Acciones para Admin y Tutor-->
            @can('manage-users')
            @endcan
            

            <!-- Acciones de Estudiante-->
            @can('student-action')
            <a class="nav_section_button" href="{{ route('student.forms.index') }}">
                <i class="nav_section_button_i fas fa-address-card"></i>   
                <span class="nav_section_button_span">
                    Formularios                  
                </span> 
            </a>
            
            @endcan 
            <a class="nav_section_button button-bottom" 
                href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav_section_button_i fas fa-sign-out-alt" ></i> 
                <span class="nav_section_button_span">
                    {{ __('Cerrar sesion') }}                   
                </span> 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
        </section>

    </nav>


               
                
                
        </nav>
         
            @yield('content')  
        
        
        
        
        
        <script src="/menujs/jquery.min.js"></script>
        <script src="/menujs/popper.js"></script>
        <script src="/menujs/bootstrap.min.js"></script>
        <script src="/menujs/main.js"></script>
         
        

<!-- Fin del menu sin una sesion iniciada --->

@endguest

</body>
</html>
