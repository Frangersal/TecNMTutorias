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
                        tutor/pupil/index.blade.php
                    </h5>
                </div>
                <div class="card-body">
                    
                   <h2>Viva nuestro dios Sid Meier.</h2>
                   botones: ['editar','reunion','ver formularios'];
                    
                </div>
            </div>
        </div>
    </div> 
</main>
@endsection