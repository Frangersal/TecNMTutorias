@extends('layouts.app')

@section('content')


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          //title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--<div id="piechart_3d" style="width: 550px; height: 500px;"></div>-->


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
                    <div id="piechart_3d" style="width: 570px; height: 400px;"></div>
                    <hr>
                </div>
            </div>


            
        </div>
    </div>
</div>
  </body>
</html>
@endsection