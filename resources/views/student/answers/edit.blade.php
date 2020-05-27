@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--- Crear preguntas ---> 
            

            <div class="card">
                <div class="card-header">
                    <h5>
                        Responder Preguntas del Formulario:  
                    </h5>
                </div>
                <div class="card-body">
                    
                    <form action ="{{ route('student.answers.update', $question->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}     


                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Respuesta</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $question->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <button type="submit" class="btn btn-warning ">Actualizar</button>
                    </form> 
                </div>
            </div> <br>
        </div>
    </div>
</div>
@endsection