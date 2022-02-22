<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!-- Archivo CSS Bootstrap 5 -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('/css/TecNM/users.css')}}" rel="stylesheet">

    <!-- Icono -->
    <link rel="icon" href="{{asset('/images/Icon.png')}}">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body body-bg">
    <nav class="nav">
        <section class="nav_section-img">
            <img class="nav_img" src="{{asset('/images/foto.jpg')}}" alt="">
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
        <section class="main_section">
            <h2 class="main_section_h2">Titulo</h2>
            <section class="main_section_section">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et qui unde, autem ullam reiciendis consequuntur debitis? Ducimus qui blanditiis ut suscipit nobis veniam, quibusdam dolores itaque accusantium. Dolore, commodi earum.
                </p>
                
            </section>
        </section>

        <section class="main_section">
            <h2 class="main_section_h2">Titulo</h2>
            <section class="main_section_section">

            <table class="table ">
                <caption>List of users</caption>
                <thead class=" table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
                
            </section>

        </section>
        
        
        <section class="main_section">
            <h2 class="main_section_h2">Titulo</h2>
            <section class="main_section_section">
                <table class="section_section_table">
                    <tr class="section_section_table_tr">
                        <th class="section_section_table_th">Company</th>
                        <th class="section_section_table_th">Contact</th>
                        <th class="section_section_table_th">Country</th>
                    </tr>
                    <tr class="section_section_table_tr">
                        <td class="section_section_table_td">Alfreds </td>
                        <td class="section_section_table_td">Maria </td>
                        <td class="section_section_table_td">Germany</td>
                    </tr>
                    <tr class="section_section_table_tr">
                        <td class="section_section_table_td">Centro </td>
                        <td class="section_section_table_td">Francisco </td>
                        <td class="section_section_table_td">Mexico</td>
                    </tr>
                </table>
            </section>

        </section>

    </main>
    
</body>
<!-- Archivo JS Bootstrap 5 -->   
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</html>