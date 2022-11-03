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
                <h2 class="flex_section_h2">Editar Pregunta del formulario " {{ $form->name }}"</h2>
                <section class="flex_section_section">
                    <div class="card-body">  
                        <form action ="{{ route('admin.questions.update', $question->id)}}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}     


                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Reformular pregunta</label> 
                                <div class="col-sm-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $question->name }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- ID FORMULARIO-->
                            <input  type="hidden" value="{{ $form->id }}" id="txtIdForm" name="txtIdForm">
                             
                            <div class="row mb-3"> 
                                    <label for="titulo"  class="col-sm-2 col-form-label">Tipo de pregunta</label> 
                                <div class="col-sm-10">
                                    <select class="form-control " name="txtIdAnswerType"  id="answerType" onclick="toggle(this)" >
                                        @foreach($answers_types as $answer_type)
                                            <option value="{{ $answer_type->id }}" selected >{{ $answer_type->id }} - {{ $answer_type->name }}</option> 
                                        @endforeach  
                                    </select>                                                                
                                </div>  
                            </div> 

                            <input id="bottonVariable" type="hidden" value="1" class="bottonVariable" name="bottonVariable">

                            <button id="botoncito" type="submit" class="btn btn-warning" name="">Actualizar pregunta</button>
                            
                        </form> 
                    </div>
                </section>
            </section>
        </section>
    </article> 
    <article class="flex-container">
        <section class="flex-item-large"> 
            <section class="flex_section">
                <h2 class="flex_section_h2">Opciones para la preguna " {{ $question->name }} "</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive"> 
                        <a href="{{ route('admin.options.show', $question->id) }}">
                            <button type="button" class="btn btn-success">Crear opcion</button>
                        </a><br> <br> 
                        <table class="table table-bordered">
                            <thead class="table-dark">  
                                <tr>
                                <th scope="col">Id ao</th>
                                <th scope="col">Id q</th>
                                <th scope="col">Opcion</th>
                                <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($options as $option)
                                <tr>
                                    <th scope="row">{{ $option->id }} </th>
                                    <th scope="row">{{ $option->question_id }} </th>
                                    <th scope="row">{{ $option->name }} </th>
                                    <th scope="row center">
                                        <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">

                                            <a href="{{ route('admin.options.edit', $option->id) }}">
                                                <button type="button" class="btn btn-warning ">Actualizar</button>
                                            </a>

                                            
                                            <form action="{{ route('admin.options.destroy', $option) }}" method="POST" class="float-left"> 
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>

<style>
    .masElementos { display:none; }
</style>
<script>
 
function toggle(o) {
var el=document.querySelector(".masElementos");
    if (o.value=="1") {el.style.display="none";}
    else {el.style.display="block";}
}
window.onload = toggle;
</script>
@endsection