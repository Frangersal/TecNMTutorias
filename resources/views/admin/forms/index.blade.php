@extends('layouts.app')

@section('content')
<title>Administrar Formularios</title> 
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
                <h2 class="flex_section_h2">Administrar Formularios</h2>
                <section class="flex_section_section">
                    <div class="card-body table-responsive">  
                        <a href="{{ route('admin.forms.create') }}">
                            <button type="button" class="btn btn-success">Crear formulario</button>
                        </a>
                        <br> <br> 
                        <table class="table table-bordered">
                            <thead class="table-dark">
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
                                    <th>{{ $form->id }} </th>
                                        <td scope="row">{{ $form->name }} </td>
                                        <td scope="row">{{ $form->description }} </td>
                                        <td scope="row center">
                                            <div class="btn-group son-center" role="group" aria-label="Basic mixed styles example">

                                                <a href="{{ route('admin.forms.edit', $form->id) }}">
                                                    <button type="button" class="btn btn-warning ">Editar</button>
                                                </a>

                                                <form action="{{ route('admin.forms.destroy', $form) }}" method="POST" class="float-left"> 
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form> 
                                            </div>
                                        </td>
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