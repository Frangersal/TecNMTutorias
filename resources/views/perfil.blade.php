@extends('layouts.app')

@section('content')
<main class="main">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <article class="flex-container">
                <section class="flex-item-large"> 
                    <section class="flex_section">
                        <h2 class="flex_section_h2">Perfil de : {{ Auth::user()->name }}</h2>
                        <section class="flex_section_section">
                            <div class="card-body">   
                                @can('student-action')
                                <h5>Bienvenido estudiante, tu tutor asignado es: {{ $nombreTutor }}</h5>
                                Tu eres un Estudiante, o pupilo.
                                <p>En este sitio, usted podra ver quien es su tutor asignado, ver la fecha y hora de su proxima reunion, y contestar los formularios que le corresponde contestar.</p> 
                                
                                @endcan

                                @can('tutor-action')
                                <h5>Bienvenido Tutor, cuentas con: # pupilos.</h5>
                                <p>En este sitio, usted podra ver quienes son sus pupilos, crear la fecha y hora de su proxima reunion, y ver los formularios contestados por sus estudiantes.</p> 
                                <hr>
                                <a href="#pReunion">Proxima reuniones</a> | <a href="#mPupilos">Mis pupilos</a> 
                                
                                
                                @endcan
                                <hr>
                                Bienvenido al sistema de tutorias del TecNM
                            </div>
                        </section>
                    </section>
                </section>
            </article> 
            <!-- Zona exclusiva para el tutor y estudiante -->
    @can('tutor-student-action')

            
        <article class="flex-container">
            <section class="flex-item-left">
                <section class="flex_section">
                    <h2 class="flex_section_h2">Proximas Reuniones</h2>
                    <section class="flex_section_section">
                        <div class="card-body table-responsive"> 
                            @can('tutor-action')
                                <a href="{{ route('tutor.pupil.reunion.index') }}">
                                    <button type="button" class="btn btn-warning float-left">Administrar</button>
                                <a>
                                <br>
                                <hr>
                            @endcan
                            
                            <table class="table table-bordered ">
                                <thead class="table-dark">
                                    <tr>
                                    @can('tutor-action')
                                    <th scope="col">Pupilo</th>
                                    @endcan

                                    @can('student-action')
                                    <th scope="col">Tutor</th>
                                    @endcan
                                    <th scope="col">Fecha/Hora</th>
                                    <th scope="col">Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @can('tutor-action')
                                        @foreach($reunions as $reunion)
                                                @if(($reunion->tutor_id)==$tutor_id)
                                                    <tr>
                                                        <th scope="row">{{ $reunion->pupils->users->name }}</th>
                                                        <td scope="row">{{ $reunion->date_time }} </td>
                                                        <td scope="row">{{ $reunion->description }} </td>
                                                    </tr>
                                                @endif
                                        @endforeach
                                    @endcan

                                    @can('student-action')
                                        @foreach($reunions as $reunion)
                                            @if(($reunion->pupil_id)==$pupil_id)
                                                <tr>
                                                    <th scope="row">{{ $reunion->tutors->users->name }}</th>
                                                    <td scope="row">{{ $reunion->date_time }} </td>
                                                    <td scope="row">{{ $reunion->description }} </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endcan
                                </tbody>
                            </table>
                            
                        </div>
                    </section>
                </section>
            </section>
            
        @can('tutor-action')
            <section class="flex-item-right">
                <section class="flex_section">
                    <h2 class="flex_section_h2">Mis Pupilos</h2>
                    <section class="flex_section_section">
                        <div class="card-body table-responsive"> 
                            
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr> 
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Facultad</th> 
                                    <th scope="col">Accion</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pupils as $pupil)
                                        @if(($pupil->tutor_id)==$tutor_id)
                                             
                                                 
                                                <th>{{ $pupil->users->name }}</th>
                                                <td>{{ $pupil->users->faculty }}</td>
                                                <td>
                                                    <a href="{{ route('tutor.pupil.form.show', $pupil->users->id) }}">
                                                        <button type="button" class="btn btn-success float-left">Ver formularios</button>
                                                    <a>
                                                </td>
                                            </tr>
                                        @endif  
                                    @endforeach                 
                                </tbody>
                            </table>
                        </div>
                    </section>
                </section>
            </section>
        </article> 
        @endcan 
    @endcan 
            
</main>
@endsection
