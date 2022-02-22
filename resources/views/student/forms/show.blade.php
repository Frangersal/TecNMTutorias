@extends('layouts.app')

@section('content')

<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Lista de preguntas del formulario
                    </h5>
                </div>
                <div class="card-body">
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">q d</th>
                                <th scope="col">f id</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">Respuesta</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        
                        @foreach($questions as $question) 
                          
                        <tr>
                            <th scope="row">{{ $question->id }} </th>
                                <td>{{ $question->form_id }} </td>
                                <td>{{ $question->name }} </td>
                                @csrf
                                <td>
                                    <!-- --------------TIPO OPCION-------------- -->
                                    @if(("{$question->answer_type_id}" == "2") ) 
                                        <select class="form-control opcion" name="txtName" > 
                                            @foreach($options as $option)
                                                @if("{$question->id}" == "{$option->question_id}")
                                                    <option value="{{ $option->name }}">{{ $option->question_id }} - {{ $option->name }}</option>   
                                                    @else                                    
                                                @endif
                                            @endforeach 
                                        </select>
                                    @else
                                        <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    @endif
                                </td> 
                                <input  type="hidden" value="{{ $question->id }}" class="idQuestion" name="idQuestion">
                                <td>
                                    <button  class="btn btn-success btn-responder ">Responder</button>
                                </td>
                            </tr>
                                   
                                       
                        @endforeach



                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</main>

<script>
$('.btn-responder').click(function(){
    console.log($(this).parent().parent().find('.opcion').val())
    var answer = $(this).parent().parent().find('.opcion').val()
    var question = $(this).parent().parent().find('.idQuestion').val()
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });


    const mensaje= {"question_id":question,"name":answer}
    var hola = {
        "json": JSON.stringify(mensaje)
    }

    console.log(hola)
    $.ajax({
        method: "POST",
        url: "{{ route('student.answers.store') }}",
        dataType: "JSON",
        data : hola 
    });
})
</script>
@endsection