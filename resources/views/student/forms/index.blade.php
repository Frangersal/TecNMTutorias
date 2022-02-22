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
            <h2 class="main_section_h2">Lista de Formularios</h2>
            <section class="main_section_section">
                <div class="card-body">
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($forms as $form)
                            <tr>
                            <th scope="row">{{ $form->id }} </th>
                            <td>{{ $form->name }} </td>
                            <td>{{ $form->description }} </td>
                            <td>

                                <a href="{{ route('student.forms.show', $form->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Preguntas</button>
                                </a>

                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
                
            </section>
        </section>

 <!-- Es Martes 23 de Junio de 2020, 12:12 AM, hay una pandemia alla afuera y yo solo quiero terminar esto. Hola persona del futuro que esta leyendo esto, espero que este pasando un lindo dia y recuerda: . xD  -->
</main>
@endsection