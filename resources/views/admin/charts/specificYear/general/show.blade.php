@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Esctadisticas
                    </h5>
                </div>
                                    
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">f_id</th>
                            <th scope="col">q_id</th>
                            <!--<th scope="col">tipo q</th>-->
                            <th scope="col">Pregunta</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        @if(($question->answer_type_id)==2)
                        <tbody>

                            <tr>
                            <th scope="row">{{ $question->form_id }}  </th>
                            <th scope="row">{{ $question->id }} </th>
                            <!--<th scope="row">{{ $question->answer_type_id }} </th>-->
                            <td><h4>{{ $question->name }}<h4></td>
                            
                            </tr>

                        </tbody>
                        @else
                        @endif
                        @endforeach

                    </table>

                <div class="card-body">
                
               
                    <canvas id="myChart"  width="150" height="100"></canvas>
                
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
                
                    <hr>
                </div>
            </div>


            
        </div>
    </div>
</div>
@endsection