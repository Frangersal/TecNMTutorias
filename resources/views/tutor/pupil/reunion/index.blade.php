@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Lista de reuniones
                    </h5>
                </div>
                
                <div class="card-body">


                    <a href="{{ route('tutor.pupil.reunion.create') }}">
                        <button type="button" class="btn btn-success">Crear Reunion</button>
                    </a> 
                    <br><br>

                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">nombre</th>
                            <th scope="col">Fecha/Hora</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($reunions as $reunion)
                        @if(($reunion->tutor_id)==$tutor_id)
                            <tr>
                            <th scope="row">{{ $reunion->id }} </th>
                            <td>{{ $reunion->pupils->users->name }} </td>
                            <td>{{ $reunion->date_time }} </td>
                            <td>{{ $reunion->description }} </td>
                            <td>

                                <a href="{{ route('tutor.pupil.reunion.edit', $reunion->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                </a>

                                <form action="{{ route('tutor.pupil.reunion.destroy', $reunion) }}" method="POST" class="float-left"> 
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>

                                

                            </td>
                            </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection