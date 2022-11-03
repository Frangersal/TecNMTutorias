@extends('layouts.app')

@section('content')





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
                <h2 class="flex_section_h2">Estadisticas</h2>
                <section class="flex_section_section">
                    <div class="card-body">  
                        <a href="{{ route('admin.charts.specificYear.general.index') }}">
                            <button type="button" class="btn btn-success  btn-lg btn-block">Año en especifico</button>
                        </a>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">A lo largo de los años</button>    
                    </div>
                    <hr> 
                    <div class="card-body">
                        <h3>Graficos y PDF</h3>
                        <p> Aqui desglosaremos las estadisticas mas importantes de cada formulario contestado por los alumnos del plantel. Cada pregunta (con opciones) cuenta con su respectivo grafico que muestra visualmente. bla bla...</p>
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection