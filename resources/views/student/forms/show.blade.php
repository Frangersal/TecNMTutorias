@extends('layouts.app')

@section('content')
<title>Formulario: {{ $formName }}</title> 
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
                <h2 class="flex_section_h2">Formulario: {{ $formName }}</h2>
                <section class="flex_section_section">
                    <div class="card-body">   
                        <form action ="{{ route('student.answers.store')}}" method="POST">
                            @csrf 
                                @foreach($questions as $question)
                                <div class="row mb-3">
                                    <label for="txtDescription" class="col-sm-4 col-form-label">Qid: {{ $question->id }} | {{ $question->name }}</label>
                                    <div class="col-sm-7">
                                        <!-- Tipo opcion IF-->
                                        @if(("{$question->answer_type_id}" == "2") ) 
                                            <select class="form-control opcion" name="txtName[]"  required> 
                                                <option value="" disabled selected hidden>Elija una respuesta...</option>
                                                @foreach($options as $option)
                                                    @if("{$question->id}" == "{$option->question_id}")
                                                        <option value="{{ $option->name }}" >{{ $option->question_id }} - {{ $option->name }}</option>   
                                                        @else                                    
                                                    @endif
                                                @endforeach 
                                            </select>
                                        @else
                                            <input id="txtName" type="text" class=" form-control @error('txtName') is-invalid @enderror" name="txtName[]"  required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        @endif
                                        <!-- Tipo opcion END IF-->
                                        
                                        @php
                                            //$questionId = $question->id;
                                            //echo $questionId."<br>";
                                            //$anwereName = txtName;
                                            //echo $anwereName."<br>";
                                        
                                        @endphp
                                        
                                        <input  type="hidden" value="{{ $question->id }}" class="idQuestion" name="idQuestion[]">
                                    </div>
                                </div>
                                <hr>
                                @endforeach

                            <br>
                            <button type="submit" class="btn btn-success">Responder</button>
                        </form> 
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection