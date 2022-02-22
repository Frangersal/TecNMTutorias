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
        <h2 class="main_section_h2">Esctadisticas</h2>
        <section class="main_section_section">
            <div class="card-body">
                <button type="button" class="btn btn-success  btn-lg btn-block">General (TecNM) </button>
                <button type="button" class="btn btn-success  btn-lg btn-block">Campus</button>
                <button type="button" class="btn btn-success  btn-lg btn-block">Carrera</button>
                <button type="button" class="btn btn-success  btn-lg btn-block">Año</button>
                <button type="button" class="btn btn-success  btn-lg btn-block">Tutores</button>
            </div>
            <hr> <!-- ----- -->

            <div class="card-body">
                <h3>Graficos y PDF</h3>
                <p> Aqui desglosaremos las estadisticas mas importantes de cada formulario contestado por los alumnos del plantel. Cada pregunta (con opciones) cuenta con su respectivo grafico que muestra visualmente. bla bla...</p>
                
            </div>
            
        </section>
    </section>

</main>
@endsection