@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h5> Editar opcion  </h5> </div>

                <div class="card-body">

                    <!--- Editar Opcion ---> 
                    <form action ="{{ route('admin.options.update', $option->id)}}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="txtName" class="col-md-3 col-form-label text-md-right">Cambiar Opcion</label>

                            <div class="col-md-6">
                                <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" value="{{ $option->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
        
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="txtIdQuestion">Cambiar Pregunta</label>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control " name="txtIdQuestion" >
                                    @foreach($questions as $question)
                                        <option value="{{ $question->id }}">{{ $question->id }} - {{ $question->name }}</option> 
                                    @endforeach 
                                    
                                </select>                                                              
                            </div>  
                        </div>

                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection