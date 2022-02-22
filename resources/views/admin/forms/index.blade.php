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
            <h2 class="main_section_h2">Administrar Formularios</h2>
            <section class="main_section_section">
                <div class="card-body">


                    <a href="{{ route('admin.forms.create') }}">
                        <button type="button" class="btn btn-success">Crear formulario</button>
                    </a> 
                    <br><br>

                    
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

                                <a href="{{ route('admin.forms.edit', $form->id) }}">
                                    <button type="button" class="btn btn-warning float-lef">Editar</button>
                                </a>

                                <form action="{{ route('admin.forms.destroy', $form) }}" method="POST" class="float-left"> 
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