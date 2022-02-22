@extends('layouts.app')

@section('content')
<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h5>Crear Fomulario </h5></div>

                <div class="card-body">

                    <form action ="{{ route('admin.forms.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="txtName" class="col-md-3 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="txtDescription" class="col-md-3 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input id="txtDescription" type="text" class="form-control @error('txtDescription') is-invalid @enderror" name="txtDescription" >

                                @error('description')
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
</main>
@endsection