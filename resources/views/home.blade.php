@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header"> <h5>Perfil de : {{ Auth::user()->name }}  </h5></div>
                <div class="card-body">
                    Bienvenido al sistema de tutorias de el TecNM
                    <hr>
                </div>                 
            </div>
            <!-- Zona exclusiva para el tutor -->
            @can('tutor-action')
                <br>
                <div class="card">
                    <div class="card-header"> <h5>Proximas Reuniones</h5></div>
                        <div class="card-body">
                            <a href="{{ route('tutor.pupil.reunion.index') }}">
                                <button type="button" class="btn btn-warning float-left">Ver</button>
                            <a>
                        </div>
                    </div>   
                  

                    <br>
                    <div class="card">
                        <div class="card-header"> <h5>Mis Pupilos</h5></div>
                            <div class="card-body">
                                <a href="#">
                                    <button type="button" class="btn btn-warning float-left">Crear</button>
                                <a>
                            </div>
                        </div>   
                    </div> 

                </div> 
            @endcan 
        </div>
    </div>
</div>
@endsection
