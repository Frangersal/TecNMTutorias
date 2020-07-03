@extends('layouts.app')

@section('content')




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
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        @if(($question->answer_type_id)==2)
                        <tbody>

                            <tr>
                            <th scope="row">{{ $question->form_id }}  </th>
                            <th scope="row">{{ $question->id }} </th>
                            <!--<th scope="row">{{ $question->answer_type_id }} </th>-->
                            <td>{{ $question->name }}</td>
                            <td>
                                <a href="{{ route('admin.charts.specificYear.general.show', $question->id) }}">
                                    <button type="button" class="btn btn-success float-lef">ver</button>
                                </a>
                            </td>
                            </tr>

                        </tbody>
                        @else
                        @endif
                        @endforeach

                    </table>

                <div class="card-body">
                    <h3>Nombre del formulario</h3>
                    <hr>
                    <h4>Pregunta del formulario</h4>
                    <div id="piechart_3d" style="width: 550px; height: 400px;"></div>
                    <hr>
                </div>
            </div>


            
        </div>
    </div>
</div>
@endsection