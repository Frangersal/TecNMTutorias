@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Opciones para las pregunas
                    </h5>
                </div>
                <div class="card-body">


                    <a href="{{ route('admin.options.create') }}">
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

                        @foreach($options as $option)
                            <tr>
                            <th scope="row">{{ $option->id }} </th>
                            <td>{{ $option->question_id }} </td>
                            <td>{{ $option->name }} </td>
                            <td>

                                <a href="{{ route('admin.options.edit', $option->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                </a>

                                
                                <form action="{{ route('admin.options.destroy', $option) }}" method="POST" class="float-left"> 
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