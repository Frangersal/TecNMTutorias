@extends('layouts.app')

@section('content')

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
                <h2 class="flex_section_h2">Pupilos en la BD</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive">  
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
                                    <th>{{ $user->id }}</th>
                                        <td scope="row">{{ $user->name }}</td>
                                        <td scope="row">{{ $user->faculty }}</td>
                                        <!-- <td>{{ implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</td> -->
                                        <th scope="row center">
                                            <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">
                                                <a href="{{ route('admin.users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-warning ">Editar y Asignar tutor</button>
                                                <a>
                                            
                                                <!-- <a href="#">
                                                <button type="button" class="btn btn-success float-left">Asignar Tutor</button>
                                                <a> -->
                                                
                                                <a href="{{ route('tutor.pupil.form.show', $user->id) }}">
                                                <button type="button" class="btn btn-success ">Ver formularios</button>
                                                <a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
            </section>
        </section>

    
</main>
@endsection