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
            <h2 class="main_section_h2">Esctadisticas</h2>
            <section class="main_section_section">
                <div class="card-body">
                    <table class="table">
                        <thead >
                            <tr>
                                <th scope="col">f_id</th>
                                <th scope="col">q_id</th>
                                <!--<th scope="col">tipo q</th>-->
                                <th scope="col">Pregunta</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        @if(($question->answer_type_id)==2)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $question->form_id }}  </th>
                                <th scope="row"> {{ $question->id }} </th>
                                <!--<th scope="row">{{ $question->answer_type_id }} </th>-->
                                <td> {{ $question->name }}</td>
                                <td>
                                    <a href="{{ route('admin.charts.specificYear.general.show', $question->id) }}">
                                        <button type="button" class="btn btn-success float-lef">ver</button>
                                    </a> 
                                </td>
                            </tr>
                        </tbody>
                        @else
                        @endif
                        @endforeach

                    </table>
                </div>
                
            </section>
        </section>

   
</main>
@endsection