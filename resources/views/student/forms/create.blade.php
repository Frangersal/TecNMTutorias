@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h5>Respuesta </h5></div>

                <div class="card-body">

                    <form action ="{{ route('admin.questions.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="txtName" class="col-md-2 col-form-label text-md-right">Escriba la pregunta</label>

                            <div class="col-md-6">
                                <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Crear</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection