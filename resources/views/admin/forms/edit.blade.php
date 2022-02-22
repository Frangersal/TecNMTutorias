@extends('layouts.app')

@section('content')
<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>

        <section class="main_section">
            <h2 class="main_section_h2">Editar Formulario</h2>
            <section class="main_section_section">
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
                
            </section>
        </section>

        <section class="main_section">
            <h2 class="main_section_h2">Administrar Preguntas del Formulario </h2>
            <section class="main_section_section">
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
                
            </section>
        </section>


</main>
@endsection