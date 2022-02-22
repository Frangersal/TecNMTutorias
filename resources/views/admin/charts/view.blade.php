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
            <h2 class="main_section_h2">Esctadisticas y graficos</h2>
            <section class="main_section_section">
                
                <button type="button" class="btn btn-dark btn-lg">General</button>
                <button type="button" class="btn btn-dark btn-lg">Large button</button>
                
            </section>
        </section>

</main>
@endsection