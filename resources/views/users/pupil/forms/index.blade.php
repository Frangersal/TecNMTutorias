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
                        Administrar Formularios
                    </h5>
                </div>
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

                                <a href="#">
                                    <button type="button" class="btn btn-warning float-lef">Ver</button>
                                </a>
                                

                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection