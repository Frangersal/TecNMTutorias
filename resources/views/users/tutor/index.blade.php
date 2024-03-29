@extends('layouts.app')

@section('content')
<title>Tutores</title> 
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
                <h2 class="flex_section_h2">Tutores</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive"> 
                        <!-- <button type="button" class="btn btn-success">Crear</button> -->
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Facultad</th>                        
                                <!-- <th scope="col">Roles</th> -->
                                <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->faculty }}</td>
                                        
                                        <th scope="row center">
                                            <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">
                                                <a href="{{ route('admin.users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-warning ">Editar</button>
                                                <a> 
                                                    
                                                @can('delete-users')
                                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left"> 
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                @endcan  
                                                <a>
                                            </div>
                                        </th>
                                    </tr>
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </section>
    </article> 


</main>
@endsection