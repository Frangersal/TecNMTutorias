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
            <h2 class="main_section_h2">Opciones para las pregunas</h2>
            <section class="main_section_section">
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
                
            </section>
        </section>

  
</main>
@endsection