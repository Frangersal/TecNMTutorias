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
            <h2 class="main_section_h2">Administrar Usuarios</h2>
            <section class="main_section_section">
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
                
            </section>
        </section>

</main>
@endsection