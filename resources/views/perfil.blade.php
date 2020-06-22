<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Style -->
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
        
        
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 navbar-dark bg-primary border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white">TNM Tutorias</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-white " href="#">Features</a>
            </nav>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="btn btn-light" href="#">Cerrar sesion</a>
            </nav>        
        </div>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-12 col-md-3 col-lg-2   navbar navbar-expand-md   navbar-dark bg-dark   pt-md-3 pl-md-2 pl-xl-3   d-md-block"> <!-- d-flex -->
                    <a class="navbar-brand" href="#">
                        <i class="fas fa-cog"></i> Nombre User
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse mt-md-1" id="sidebar">
                        <ul class="navbar-nav d-block mr-auto">
                        <li class="nav-item w-100 btn btn-dark text-left">
                            <a class="nav-link active" href="#">
                            Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item w-100 btn btn-dark text-left">
                            <a class="nav-link" href="#">
                            Orders
                            </a>
                        </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-12 col-md-9 col-lg-10 px-4">
                some content

                <div class="container">
                    <canvas id="myChart"  width="300" height="100"></canvas>
                
                    <script>

                        let myChart = document.getElementById('myChart').getContext('2d');

                        // Global Options
                        Chart.defaults.global.defaultFontFamily = 'Lato';
                        Chart.defaults.global.defaultFontSize = 18;
                        Chart.defaults.global.defaultFontColor = '#000000';

                        let massPopChart = new Chart(myChart, {
                        type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea

                        data:{
                            //Nombres de opciones
                            labels:['Boston', 'Worcester', 'Springfield', 'Lowell', ],
                            datasets:[{
                            label:'Population',
                            //Numeros de las opciones
                            data:[ 617594, 181045, 153060,],
                            //backgroundColor:'green',
                            backgroundColor:[ 
                                '#009f4d',
                                '#e4002b',
                                '#0085ad',
                                '#efdf00',
                                '#a51890',
                                '#fe5000',
                                '#84bd00',
                            ],
                            borderWidth:2,
                            borderColor:'#ffffff',
                            hoverBorderWidth:4,
                            hoverBorderColor:'#00cc00'
                            }]
                        },
                        options:{
                            title:{
                            display:true,
                            text:'Question. xd',
                            fontSize:25
                            },
                            legend:{
                            display:true,
                            position:'right',
                            labels:{
                                fontColor:'#000'
                            }
                            },
                            layout:{
                            padding:{
                                left:0,
                                right:0,
                                bottom:0,
                                top:0
                            }
                            },
                            tooltips:{
                            enabled:true
                            }
                        }
                        });
                    </script>
                </div>
                
                <!-- when you uncomment code below, it works -->
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>a
                lot of content
                </main>
            </div>
        </div>
    </body>
</html>
