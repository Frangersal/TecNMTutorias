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
            <h2 class="main_section_h2">Lista de Preguntas</h2>
            <section class="main_section_section">
                <div class="card-body">

                    <a href="{{ route('student.answers.create') }}">
                        <button type="button" class="btn btn-success">Crear respuesta</button>
                    </a> 
                    <br><br>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">User_Id</th>
                            <th scope="col">Q_Id</th>
                            <th scope="col">A_Id</th>
                            <th scope="col">Respuesta</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($answers as $answer)
                            <tr>
                            <th scope="row">{{ Auth::user()->id }}</th>
                            <td>{{ $answer->question_id }} </td>
                            <td>{{ $answer->id }} </td>
                            <td>{{ $answer->name }} </td>
                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
                
            </section>
        </section>

</main>
@endsection