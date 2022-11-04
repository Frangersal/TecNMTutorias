@extends('layouts.app')

@section('content')
<title>Estadisticas: Lista de preguntas</title> 
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
                <h2 class="flex_section_h2">Preguntas con graficos</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive"> 
                        <button type="button" class="btn btn-success">Crear</button>
                        <br> <br> 
                        <table class="table table-bordered ">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">f_id</th>
                                    <th scope="col">q_id</th>
                                    <th scope="col">Pregunta</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                @if(($question->answer_type_id)==2)
                                    <tr>
                                        <th scope="row">{{ $question->form_id }}  </th>
                                        <th scope="row"> {{ $question->id }} </th>
                                        <th scope="row"> {{ $question->name }}</th>
                                        <th scope="row center">
                                            <div class="btn-group son-center group-sm" role="group" aria-label="Basic mixed styles example">
                                                        
                                                <a href="{{ route('admin.charts.specificYear.general.show', $question->id) }}">
                                                    <button type="button" class="btn btn-success ">ver</button>
                                                </a> 
                                            </div>
                                        </th>
                                    </tr>
                                @else
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection