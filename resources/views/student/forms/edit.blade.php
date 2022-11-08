@extends('layouts.app')

@section('content')
<title>Editar formulario: {{ $formName }}</title> 
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
                <h2 class="flex_section_h2">Editar formulario: {{ $formName }}</h2>
                <section class="flex_section_section">
                    <div class="card-body"> 
                        <form action ="{{ route('student.forms.store')}}" method="POST">
                            @csrf
                                <?php $i=0 ?>  
                                @foreach($questions as $question)
                                <div class="row mb-3">
                                    <label for="txtDescription" class="col-sm-4 col-form-label"> Qid: {{ $question->id }} | {{ $question->name }}</label>
                                    <div class="col-sm-7">
                                        <!-- Tipo opcion IF-->
                                        @if(("{$question->answer_type_id}" == "2") ) 
                                            <select id="txtName" class="form-control @error('txtName') is-invalid @enderror txtName" 
                                            class="form-control opcion" name="txtName[]"  value="{{ $answers[$i]->name }}" required autofocus>  
                                                <option  value="{{ $answers[$i]->name }}" disabled selected hidden>{{ $answers[$i]->name }}</option>
                                                @foreach($options as $option)
                                                    @if("{$question->id}" == "{$option->question_id}")
                                                        <option value="{{ $question->$answers }}"  required>{{ $option->question_id }} - {{ $option->name }}</option>   
                                                        @else                                 
                                                    @endif
                                                @endforeach 
                                            </select>
                                        @else
                                            <input value="{{ $answers[$i]->name }}" required id="txtName" type="text" class=" form-control @error('txtName') is-invalid @enderror" name="txtName[]"  >
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        @endif
                                        <!-- Tipo opcion END IF
                                        ">-->
                                        
                                        @php
                                            //$questionId = $question->id;
                                            //echo $questionId."<br>";
                                            //$anwereName = txtName;
                                            //echo $anwereName."<br>";
                                        
                                        @endphp
                                        <input  type="hidden" value="{{ $question->id }}" class="idQuestion" name="idQuestion[]">
                                    <?php $i++ ?>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                            <br>
 
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>        
                    </div>
                </section>
            </section>
        </section>
    </article>
</main>
@endsection