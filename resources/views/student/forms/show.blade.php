@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Lista de preguntas del formulario
                    </h5>
                </div>
                <div class="card-body">
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">q d</th>
                                <th scope="col">f id</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">Respuesta</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        
                        @foreach($questions as $question) 

                                    @if(("{$question->answer_type_id}" == "2") )   
                                    
                                                
                                        <!--imprimir opciones-->
                                        <!-- --------------TIPO OPCION-------------- -->
                                        <tr>
                                            <th scope="row">{{ $question->id }} </th>
                                                <td>{{ $question->form_id }} </td>
                                                <td>{{ $question->name }} </td>
                                                
                                                <form action ="{{ route('student.answers.store') }}" method="POST">
                                                @csrf
                                                    <td>
                                                        <select class="form-control " name="txtName" > 
                                                            @foreach($options as $option)
                                                                @if("{$question->id}" == "{$option->question_id}")
                                                                    <option value="{{ $option->name }}">{{ $option->question_id }} - {{ $option->name }}</option>   
                                                                    @else                                    
                                                                @endif
                                                            @endforeach 
                                                        </select> 
                                                        </td>
                                                        <input id="idQuestion" type="hidden" value="{{ $question->id }}" name="idQuestion">
                                                        <td>
                                                            <button type="submit" class="btn btn-success">Responder</button>
                                                        </td>
                                                    </form>                            
                                                </tr>
                                                <!-- ----------------FIN -> TIPO OPCION------------ -->
                                    @else
                                        <!--imprimir texto-->

                                            <!-- --------------TIPO TEXTO-------------- -->
                                            <tr>
                                                <th scope="row">{{ $question->id }} </th>
                                                <td>{{ $question->form_id }} </td>
                                                <td>{{ $question->name }} </td>
                                                <form action ="{{ route('student.answers.store') }}" method="POST">
                                                @csrf
                                                    <td>
                                                        <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                    <input id="idQuestion" type="hidden" value="{{ $question->id }}" name="idQuestion">
                                                    <td>
                                                        <button type="submit" class="btn btn-success">Responder</button>
                                                    </td>
                                                </form>                            
                                            </tr>
                                            <!-- ----------------FIN -> TIPO TEXTO------------ -->
                                    
                                        <!--Imprimir el choro de abajo --> 
                                    @endif    
                        @endforeach


                        <!---->


                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection