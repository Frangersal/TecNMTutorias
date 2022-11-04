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
                <h2 class="flex_section_h2">Ver Formularios contestados por: {{ $pupilName }}</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive"> 
                        <a href="{{ route('pdf.users.show', $id ?? '') }}">
                            <button type="button" class="btn btn-success float-left">Descargar PDF</button>
                        <a><br><br>
                        <img class="nav_img" src="{{asset($pupilPicture)}}" alt="Foto de {{ $pupilName }}"> 
                        <br><br>
                    
                        @foreach($forms as $form)
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col" colspan="2"><h2> {{ $form->name }} </h2></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="2">{{ $form->description }}</th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    @foreach($questions as $question)
                                        @if(($form->id)==($question->form_id))
                                            <tr>
                                                <th scope="row">{{ $question->name }} :</th>
                                                @foreach($answers as $answer)
                                                    @if((($question->id)==($answer->question_id))&& ($answer->user_id)==($id ?? '') )
                                                        <th scope="row"><i>"{{ $answer->name }}"</i></th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach 
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection