@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h5> Editar Formulario  </h5> </div>

                <div class="card-body">

                    <!--- Editar formulario ---> 
                    <form action ="{{ route('admin.forms.update', $form->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $form->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $form->description }}" required autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </form> 
                </div>
            </div>
            <!--- Crear preguntas --->   <br><br>

            <div class="card">
                <div class="card-header">
                    <h5>
                        Administrar Preguntas del Formulario 
                    </h5>
                </div>
                <div class="card-body">
                

                    <a href="{{ route('admin.forms.create') }}">
                        <button type="button" class="btn btn-success">Crear Pregunta</button>
                    </a> 
                    <br><br>

                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">f_id</th>
                            <th scope="col">q_id</th>
                            <th scope="col">Pregunta</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                            <th scope="row">e </th>
                            <th scope="row">e </th>
                            <td>e</td>
                            <td>
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                            </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection