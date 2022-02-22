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
            <h2 class="main_section_h2">Responder Preguntas del Formulario:  </h2>
            <section class="main_section_section">
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
                
            </section>
        </section>

</main>
@endsection