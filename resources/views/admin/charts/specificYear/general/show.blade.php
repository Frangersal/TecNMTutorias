@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>



<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>

        <section class="main_section">
            <h2 class="main_section_h2">Esctadisticas</h2>
            <section class="main_section_section">
                <div class="card-body">
                    <table class="table">
                    
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Formulario</th>
                            <th scope="col">q_id</th>
                            <th scope="col">Pregunta</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $question->form_id }}  </th>
                                <th scope="row">{{ $question->id }} </th>
                                <td>{{ $question->name }}</td>  
                            </tr>
                        </tbody>

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Opcion </th>
                                    <th scope="col">Num. Respuestas </th>
                                    <th scope="col">Porcentaje</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                                <th scope="row"><?php echo $labels  ?> </th>
                                <th scope="row"><?php echo  $datas ?></th>
                                <th scope="row">jeje </th>
                                <th scope="row">jeje </th>
                            </tr>
                            </tbody>
                        </table>

                        @endforeach
                    
                    </table> 
                    <canvas id="myChart"  width="250" height="150"></canvas>  
                </div>

               

                <script>                
                let myChart = document.getElementById('myChart').getContext('2d');

                // Global Options
                Chart.defaults.global.defaultFontFamily = 'Lato';
                Chart.defaults.global.defaultFontSize = 18;
                Chart.defaults.global.defaultFontColor = '#000000';

                var data = {!!$datas!!};
                var label = {!!$labels!!};
                console.log(data)
                console.log(label)
                // console.log(dataArray);

                let massPopChart = new Chart(myChart, {
                type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea

                    data:{
                        //Nombres de opciones ---------------- Hey listen!
                        labels: label  ,
                        //cd .cd ,
                        datasets:[{
                            label:'Respuestas',
                            //Numeros de las opciones ------------ Watch up!
                            data: data,
                            //[ 617594, 181045],

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
                
            </section>
        </section>

</main>
@endsection