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
            <h2 class="main_section_h2">Administrar Preguntas del Formulario </h2>
            <section class="main_section_section">
                <div class="card-body">
                
                    

                    <a href="{{ route('admin.questions.create') }}">
                        <button type="button" class="btn btn-success">Crear Pregunta</button>
                    </a> 
                    
                    <br><br>
                    <a href="{{ route('admin.options.index') }}">
                        <button type="button" class="btn btn-primary">Crear Opciones</button>
                    </a> 
                    <br><br>
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">f_id</th>
                            <th scope="col">q_id</th>
                            <th scope="col">tipo q</th>
                            <th scope="col">Pregunta</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        <tbody>

                            <tr>
                            <th scope="row">{{ $question->form_id }}  </th>
                            <th scope="row">{{ $question->id }} </th>
                            <th scope="row">{{ $question->answer_type_id }} </th>
                            <td>{{ $question->name }}</td>
                            <td>
                                <a href="{{ route('admin.questions.edit', $question->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                </a>

                                <form action="{{ route('admin.questions.destroy', $question) }}" method="POST" class="float-left"> 
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                


                                

                            </td>
                            </tr>

                        </tbody>
                        @endforeach

                    </table>
                </div>
                
            </section>
        </section>

    
</main>
@endsection