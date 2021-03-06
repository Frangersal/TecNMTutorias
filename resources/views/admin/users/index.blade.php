@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                    Administrar Usuarios
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">E-Mail</th>                        
                            <th scope="col">Roles</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.users.edit', $user->id) }}">
                                            <button type="button" class="btn btn-warning float-left">Editar</button>
                                            <a>
                                        @endcan                                        
                                        @can('delete-users')
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left"> 
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        @endcan  
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