@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Ver Formularios contestados por: {{ $pupilName }}
                    </h5>
                </div>
                
                <a href="{{ route('pdf.users.show', $id ?? '') }}">
                    <button type="button" class="btn btn-success float-left">Descargar PDF</button>
                <a>

                <div class="card-body">
                
                    @foreach($forms as $form)
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ $form->name }}</th>
                                    <th scope="col">{{ $form->description }}</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach($questions as $question)
                                    @if(($form->id)==($question->form_id))
                                        <tr>
                                            <td>{{ $question->name }} :</td>
                                            @foreach($answers as $answer)
                                                @if((($question->id)==($answer->question_id))&& ($answer->user_id)==($id ?? '') )
                                                    <td><i>{{ $answer->name }} </i></td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection