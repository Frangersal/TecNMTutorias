@extends('layouts.app')

@section('content')

<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Tutores en la BD
                    </h5>
                </div>
                <div class="card-body">
                
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
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
                                        <!-- <td>{{ implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</td> -->
                                        <td>
                                            <a href="{{ route('admin.users.edit', $user->id) }}">
                                            <button type="button" class="btn btn-warning float-left">Editar</button>
                                            <a>
                                            
                                            <a href="#">
                                            <button type="button" class="btn btn-success float-left">:P</button>
                                            <a>
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
</main>
@endsection