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
        <h2 class="main_section_h2">Editar Pregunta del formulario " {{ $form->name }}"</h2>
        <section class="main_section_section">
            <div class="card-body">

                <!--- Editar formulario ---> 
                <form action ="{{ route('admin.questions.update', $question->id)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}     


                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">Reformular pregunta</label>

                        <div class="col-md-6">
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
                    <br>
                    <div class="form-group row">
                        <div class="col-md-3 text-md-right">
                            <label for="titulo">Tipo de pregunta</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control " name="txtIdAnswerType"  id="answerType" onchange="changeButton()" >
                                @foreach($answers_types as $answer_type)
                                    <option value="{{ $answer_type->id }}" selected >{{ $answer_type->id }} - {{ $answer_type->name }}</option> 
                                @endforeach  
                            </select>                                                                
                        </div>  
                    </div>
                    <br><br><br>

                    <input id="bottonVariable" type="hidden" value="1" class="bottonVariable" name="bottonVariable">

                    <button id="botoncito" type="submit" class="btn btn-warning" name="">Actualizar pregunta</button>
                    
                </form> 
            </div>
            
        </section>
    </section>

    <section class="main_section">
        <h2 class="main_section_h2">Opciones para la preguna " {{ $question->name }} "</h2>
        <section class="main_section_section">
            <div class="card-body">

<!--
                <a href="{{ route('admin.options.create') }}"> -->
                <a href="{{ route('admin.options.show', $question->id) }}">
                    <button type="button" class="btn btn-success">Crear opcion</button>
                </a> 
                <br><br>

                
                <table class="table">
                    <thead class="thead-dark">
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
                        <td>{{ $option->question_id }} </td>
                        <td>{{ $option->name }} </td>
                        <td>

                            <a href="{{ route('admin.options.edit', $option->id) }}">
                                <button type="button" class="btn btn-warning float-lef">Actualizar</button>
                            </a>

                            
                            <form action="{{ route('admin.options.destroy', $option) }}" method="POST" class="float-left"> 
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </section>
</main>
<script>
   
function changeButton() {
    var x = document.getElementById("answerType").value;
    if (x == 2) {
        document.getElementById("botoncito").innerHTML = "Actualizar pregunta y crear las opciones ";
        document.getElementById("bottonVariable").setAttribute("value","editarIrOpcion");
        document.getElementById("botoncito").setAttribute("name","editarIrOpcion");
        document.getElementById("botoncito").setAttribute("class","btn btn-primary");
    } else {
        document.getElementById("botoncito").innerHTML = "Actualizar pregunta ";
        document.getElementById("bottonVariable").setAttribute("value","editar");
        document.getElementById("botoncito").setAttribute("name","editar");
        document.getElementById("botoncito").setAttribute("class","btn btn-warning");
    }
    //alert("Valor bottonVariable name: "+bottonVariable.getAttribute('name'));
}
</script>
@endsection