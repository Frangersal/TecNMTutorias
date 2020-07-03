@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Esctadisticas
                    </h5>
                </div>
                

                <div class="card-body">
                    <a href="{{ route('admin.charts.specificYear.general.index') }}">
                        <button type="button" class="btn btn-success  btn-lg btn-block">Año en especifico</button>
                    </a>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">A lo largo de los años</button>

                   
                </div>
                <hr> <!-- ----- -->

                <div class="card-body">
                    <h3>Graficos y PDF</h3>
                    <p> Aqui desglosaremos las estadisticas mas importantes de cada formulario contestado por los alumnos del plantel. Cada pregunta (con opciones) cuenta con su respectivo grafico que muestra visualmente. bla bla...</p>
                    
                </div>
            </div>


            
        </div>
    </div>
</div>
@endsection