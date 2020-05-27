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
                            <th scope="col">Id</th>
                            <th scope="col">f id</th>
                            <th scope="col">Pregunta</th>
                            <th scope="col">Respuesta</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($questions as $question)
                            <tr>
                            <th scope="row">{{ $question->id }} </th>
                            <td>{{ $question->form_id }} </td>
                            <td>{{ $question->name }} </td>

                            
		                    <form action ="{{ route('student.answers.store', $question->id)}}" method="POST">
                            @csrf
				                <td>
                                    <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
				                </td>

                                <td>
                                    <button type="submit" class="btn btn-success">Responder</button>
                                </td>
                            </form> 
                            
                            
                           
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection