@extends('layouts.app')

@section('content')
<title>Reuniones</title> 
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
            <h2 class="flex_section_h2">Reuniones</h2>
            <section class="flex_section_section">
                <div class="card-body table-responsive"> 
                    <a href="{{ route('tutor.pupil.reunion.create') }}">
                        <button type="button" class="btn btn-success">Crear Reunion</button>
                    </a> 
                    <br> <br> 
                    <table class="table table-bordered ">
                        <thead class="table-dark">
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
                                <td scope="row">{{ $reunion->pupils->users->name }} </td>
                                <td scope="row">{{ $reunion->date_time }} </td>
                                <td scope="row">{{ $reunion->description }} </td>
                                <td scope="row center" >
                                    <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">
                                                
                                        <a href="{{ route('tutor.pupil.reunion.edit', $reunion->id) }}">
                                            <button type="button" class="btn btn-warning">Editar</button>
                                        </a>

                                        <form action="{{ route('tutor.pupil.reunion.destroy', $reunion) }}" method="POST" class="float-left"> 
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div> 
                                </td>
                            </tr>
                            @endif
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