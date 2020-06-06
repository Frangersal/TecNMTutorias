@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Opciones de la pregunta
                    </h5>
                </div>
                <div class="card-body">


                    <a href="{{ route('admin.forms.create') }}">
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

                        @foreach($answers_options as $answer_option)
                            <tr>
                            <th scope="row">{{ $answer_option->id }} </th>
                            <td>{{ $answer_option->question_id }} </td>
                            <td>{{ $answer_option->name }} </td>
                            <td>

                                <a href="{{ route('admin.forms.edit',  $answer_option->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                </a>

                                <form action="{{ route('admin.forms.destroy',  $answer_option) }}" method="POST" class="float-left"> 
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
            </div>
        </div>
    </div>
</div>
@endsection