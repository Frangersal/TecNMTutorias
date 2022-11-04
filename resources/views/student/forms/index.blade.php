@extends('layouts.app')

@section('content')
<title>Lista de Formularios</title> 
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
                <h2 class="flex_section_h2">Lista de Formularios</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive"> 
                        
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr> 
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($forms as $form) <!-- Foreach de Forms -->
                                    <tr>
                                    <th scope="row">{{ $form->id }} </th>
                                    <td>{{ $form->name }} </td>
                                    <td>{{ $form->description }} </td>
                                    <td>
                                        <!-- El foreach de Forms, nos dara el form-Id
                                        <p>>F#: {{ $form->id }} </p>-->
                                        
                                        @php
                                            $contadorQuestions=0;
                                            $contadorAnswers=0;
                                        @endphp

                                        @foreach($questions as $question)
                                            <!-- Solo revisare las questions que tengan ese mismo form-Id-->
                                            @if("{$form->id}" == "{$question->form_id}")
                                                <!-- <p>if es el mismo formIF del question  </p>
                                                un for de las questions que revisen el numero de questions que tengan el form-id,con un contador-->
                                                @php
                                                    $contadorQuestions++;
                                                    //echo "<p>>>Q#:".$contadorQuestions."</p>"; 
                                                @endphp
                                                <!-- un for de las answers que revise el numero de answers, con un contador-->
                                                @foreach($answers as $answer)
                                                    @if("{$question->id}"=="{$answer->question_id}")
                                                        @php
                                                            $contadorAnswers++;
                                                            //echo "<p>>>>A#:".$contadorAnswers."</p>"; 
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        
                                        <!-- comparar el numero de los contadores--> 
                                        @php
                                            //echo "<p>-----------</p>"; 
                                            //echo "<p>Q#:".$contadorQuestions."</p>"; 
                                            //echo "<p>A#:".$contadorAnswers."</p>"; 
                                            if($contadorQuestions == $contadorAnswers){
                                                //echo "<p>SON IGUALES. :D</p>"; 
                                        @endphp
                                                <a href="{{ route('student.forms.edit', $form->id) }}">
                                                    <button type="button" class="btn btn-danger">Editar</button>
                                                </a> 
                                        @php    }else{
                                                //echo "<p>NO son iguales... :(</p>";
                                        @endphp
                                                <a href="{{ route('student.forms.show', $form->id) }}">
                                                    <button type="button" class="btn btn-success">Preguntas</button>
                                                </a>
                                        @php     }
                                        @endphp
                                    </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    
                    </div>
                
                </section>
            </section>
        </section>
    </article> 

 <!-- Es Martes 23 de Junio de 2020, 12:12 AM, hay una pandemia alla afuera y yo solo quiero terminar esto. Hola persona del futuro que esta leyendo esto, espero que este pasando un lindo dia y recuerda: . xD  -->
</main>
@endsection