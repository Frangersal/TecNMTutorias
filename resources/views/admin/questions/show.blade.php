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
            <h2 class="main_section_h2">Crear Pregunta del Formulario: "{{ $form->id }} - {{ $form->name }}"</h2>
            <section class="main_section_section">
                <div class="card-body">

                    <form action ="{{ route('admin.questions.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="txtName" class="col-md-3 col-form-label text-md-right">Escriba la pregunta</label>

                            <div class="col-md-6">
                                <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <!-- ID FORMULARIO-->
                        <input  type="hidden" value="{{ $form->id }}" id="txtIdForm" name="txtIdForm">
                        <br>
                        <div class="form-group row">
                            <label for="txtName" class="col-md-3 col-form-label text-md-right">Tipo de pregunta</label>
                            <div class="col-md-6">
                                <select class="form-control " name="txtIdAnswerType" id="answerType" onchange="changeButton()" >
                                    <option value="" disabled selected hidden>Elija tipo</option>
                                    @foreach($answers_types as $answer_type)
                                        <option value="{{ $answer_type->id }}" >{{ $answer_type->id }} - {{ $answer_type->name }}</option> 
                                    @endforeach 
                                    
                                </select> 
                            </div>
                        </div>
                        <br>                        
                        <input id="bottonVariable" type="hidden" value="1" class="bottonVariable" name="bottonVariable">
                        
                        <button disabled id="botoncito" type="submit" class="btn btn-success" name="">Crear</button>
                        
                    </form>                    
                </div>
                
            </section>
        </section>   
</main>
<script>
    
function changeButton() {
}

</script>
@endsection