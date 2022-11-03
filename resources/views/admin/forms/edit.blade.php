@extends('layouts.app')

@section('content')
<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>

    <article class="flex-container">
        <section class="flex-item-large"> 
            <section class="flex_section">
                <h2 class="flex_section_h2">Editar Formulario " {{$form->name}} "</h2>
                <section class="flex_section_section">
                    <div class="card-body">   
                        <form action ="{{ route('admin.forms.update', $form->id)}}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>

                                    <div class="col-sm-10">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $form->name }}" required autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Descripcion</label>

                                    <div class="col-sm-10">
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
        </section>
    </article> 

    <article class="flex-container">
        <section class="flex-item-large"> 
            <section class="flex_section">
                <h2 class="flex_section_h2">Administrar Preguntas del formulario " {{$form->name}} " </h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive">
                        <a href="{{ route('admin.questions.show', $form->id) }}">
                            <button type="button" class="btn btn-success">Crear Pregunta</button>
                        </a>   <br> <br> 
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">f_id</th>
                                    <th scope="col">q_id</th>
                                    <th scope="col">Tipo Q</th>
                                    <th scope="col">Pregunta</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            @if($questions == '')
                            @else
                                @foreach($questions as $question)
                                <tbody>

                                    <tr>
                                        <th scope="row">{{ $question->form_id }}  </th>
                                        <th scope="row">{{ $question->id }} </th>
                                        <th scope="row">{{ $question->answer_type_id }} -
                                            @if($question->answer_type_id==1) Texto @else Option @endif
                                        </th>
                                        <th>{{ $question->name }}</th>
                                        <th scope="row center">
                                            <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">
                                                <a href="{{ route('admin.questions.edit', $question->id) }}">
                                                    <button type="button" class="btn btn-warning  ">Editar</button>
                                                </a>

                                                <form action="{{ route('admin.questions.destroy', $question) }}" method="POST" class="float-left"> 
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </section>
            </section>
        </section>
    </article>
</main>
@endsection