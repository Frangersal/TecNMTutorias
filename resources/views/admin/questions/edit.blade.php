@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h5> Editar Pregunta  </h5> </div>

                <div class="card-body">

                    <!--- Editar formulario ---> 
                    <form action ="{{ route('admin.questions.update', $question->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}     


                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $question->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="titulo">Cambiar Formulario</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control " name="txtIdForm" >
                                    @foreach($forms as $form)
                                        <option value="{{ $form->id }}">{{ $form->id }} - {{ $form->name }}</option> 
                                    @endforeach                                     
                                </select>                                                                
                            </div>  
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="titulo">Cambiar tipo de pregunta</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control " name="txtIdAnswerType" >
                                    @foreach($answers_types as $answer_type)
                                        <option value="{{ $answer_type->id }}" >{{ $answer_type->id }} - {{ $answer_type->name }}</option> 
                                    @endforeach                                     
                                </select>                                                                
                            </div>  
                        </div>

                        



                        <button type="submit" class="btn btn-warning ">Actualizar</button>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection