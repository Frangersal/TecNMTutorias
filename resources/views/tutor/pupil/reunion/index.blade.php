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
            <h2 class="main_section_h2">Lista de reuniones</h2>
            <section class="main_section_section">
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
                
            </section>
        </section>


</main>
@endsection