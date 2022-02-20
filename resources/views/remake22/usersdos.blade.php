<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('/css/TecNM/users.css')}}" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body body-bg">
    <nav class="nav">
        <section class="nav_section-img">
            <img class="nav_img" src="{{asset('/images/chica.jpg')}}" alt="">
        </section>
        
        <section class="nav_section">
            <a class="nav_section_button button-top">
                <i class="nav_section_button_i fas fa-home"></i>  
                <span class="nav_section_button_span">
                    Inicio
                </span> 
            </a>
            <a class="button-selected">
                <i class="nav_section_button_i fas fa-user"></i>   
                <span class="nav_section_button_span">
                    Perfil
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-chalkboard-teacher"></i>  
                <span class="nav_section_button_span">
                    Tutores                    
                </span>  
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-users"></i>   
                <span class="nav_section_button_span">
                    Pupilos                    
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-user-clock"></i>   
                <span class="nav_section_button_span">
                    Reuniones                   
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-address-card"></i>   
                <span class="nav_section_button_span">
                   Formularios 
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-question-circle"></i>   
                <span class="nav_section_button_span">
                    Pregunta                    
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-chart-bar"></i> 
                <span class="nav_section_button_span">
                    Estadistica                    
                </span> 
            </a>
            <a class="nav_section_button">
                <i class="nav_section_button_i fas fa-address-card"></i>   
                <span class="nav_section_button_span">
                    Formularios                    
                </span> 
            </a>
            <a class="nav_section_button button-bottom">
                <i class="nav_section_button_i fas fa-sign-out-alt" ></i> 
                <span class="nav_section_button_span">
                    Cerrar sesion                    
                </span> 
            </a>
        </section>

    </nav>
    <main class="main">
        <nav clasS="title">
            <h1 class="title_h1">
                Tutorias ITA
            </h1>
            <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
        </nav>
        
        <div class="accordion">
            <input type="radio" name="select" class="accordion-select" checked />
            <div class="accordion-title">
                <span>Title</span>
            </div>
            <div class="accordion-content">Content</div> 
                <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span>Title</span>
            </div>
            <div class="accordion-content">Content</div> 
                <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span>Title</span>
            </div>
            <div class="accordion-content">Content</div> 
                <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span>Title</span>
            </div>
            <div class="accordion-content">Content</div> 
        </div> 


    </main>
    
</body>
</html>