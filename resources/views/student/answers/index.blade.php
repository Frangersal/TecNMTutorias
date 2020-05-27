@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Lista de Preguntas
                    </h5>
                </div>
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
            </div>
        </div>
    </div>
</div>
@endsection