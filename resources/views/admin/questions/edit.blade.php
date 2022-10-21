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
            <h2 class="main_section_h2">Editar Pregunta</h2>
            <section class="main_section_section">
                <div class="card-body">

                    <!--- Editar formulario ---> 
                    <form action ="{{ route('admin.questions.update', $question->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}     


                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $question->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="titulo">Tipo de pregunta</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control " name="txtIdAnswerType"  id="answerType" onchange="changeButton()" >
                                    <option value="" disabled selected hidden>Elija tipo</option>
                                    @foreach($answers_types as $answer_type)
                                        <option value="{{ $answer_type->id }}" >{{ $answer_type->id }} - {{ $answer_type->name }}</option> 
                                    @endforeach                                     
                                </select>                                                                
                            </div>  
                        </div>
                        <br><br><br>

                        <button disabled id="botoncito" type="submit" class="btn btn-success" name="">Crear</button>
                        
                    </form> 
                </div>
                
            </section>
        </section>

</main>
<script>
function changeButton() {
    var x = document.getElementById("answerType").value;
        document.getElementById("botoncito").disabled = false;
    if (x == 2) {
        document.getElementById("botoncito").innerHTML = "Actualizar pregunta y crear las opciones. ";
        document.getElementById("botoncito").setAttribute("name","crearIrOpcion");
        document.getElementById("botoncito").setAttribute("class","btn btn-primary");
    } else {
        document.getElementById("botoncito").innerHTML = "Solo actualizar pregunta. ";
        document.getElementById("botoncito").setAttribute("name","crear");
        document.getElementById("botoncito").setAttribute("class","btn btn-success");
    }
    //alert("Valor: "+botoncito.getAttribute('name'));
    

    window.onload=changeButton;
}

</script>
@endsection