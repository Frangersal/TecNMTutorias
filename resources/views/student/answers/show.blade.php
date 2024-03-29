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
        <h2 class="main_section_h2">Lista de preguntas del formulario (Editar Respuestas)</h2>
        <section class="main_section_section">
            <div class="card-body">
                <form action ="{{ route('student.answers.show')}}" > 
                    @csrf
                    <div class="form-group row">
                        <?php $i = 0 ?>
                        @foreach($questions as $question)
                            <label for="txtDescription" class="col-form-label text-md-right">
                                Qid: {{ $question->id }} | {{ $question->name }}
                            </label>

                            <!-- Tipo opcion IF-->
                            @if(("{$question->answer_type_id}" == "2") ) 
                                <select class="form-control opcion" name="txtName[]" > 
                                    <option value="{{ $answers[$i]->name }}" disabled selected hidden>
                                        {{ $answers[$i]->name }}
                                    </option>
                                    @foreach($options as $option)
                                        @if("{$question->id}" == "{$option->question_id}")
                                            <option value="{{ $question->$answers }}"  required>
                                                {{ $option->question_id }} - {{ $option->name }}
                                            </option>   
                                            @else                                 
                                        @endif
                                    @endforeach 
                                </select>
                            @else
                                <input value="{{ $answers[$i]->name }}" 
                                required id="txtName" type="text" 
                                class="form-control @error('txtName') is-invalid @enderror" 
                                name="txtName[]" >
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
                            
                            <input  type="hidden" value="{{ $question->id }}" 
                            class="idQuestion" name="idQuestion[]">
                        <?php $i++ ?>
                        @endforeach

                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Responder</button>
                </form>        
            </div>
        </section>
    </section>
</main>
@endsection