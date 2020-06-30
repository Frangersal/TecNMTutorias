@extends('layouts.app')

@section('content')

<div class="container">
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
                                            <a href="#">
                                            <button type="button" class="btn btn-warning float-left">Editar</button>
                                            <a>

                                            
                                            <a href="#">
                                            <button type="button" class="btn btn-success float-left">Dar alta</button>
                                            <a>
                                        </td>
                                    </tr>
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                    
                   <h2>Viva nuestro dios Sid Meier.</h2>
                   botones: ['editar','reunion','ver formularios'];
                    
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection