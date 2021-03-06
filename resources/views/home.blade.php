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

            <div class="card"><a name="inicio" id="inicio"></a>
                <div class="card-header"> <h5>Perfil de : {{ Auth::user()->name }}  </h5></div>
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
            </div>
            <!-- Zona exclusiva para el tutor y estudiante -->
            @can('tutor-student-action')
                <br>
                <div class="card"><a name="pReunion" id="pReunion"></a>
                    <div class="card-header"> <h5>Proximas Reuniones</h5><a href="#inicio">Inicio</a></div>
                        <div class="card-body"> 
                            @can('tutor-action')
                                <a href="{{ route('tutor.pupil.reunion.index') }}">
                                    <button type="button" class="btn btn-warning float-left">Administrar</button>
                                <a>
                                <br>
                                <hr>
                            @endcan

                            <table class="table">
                                <thead class="thead-dark">
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
                                                    <td>{{ $reunion->pupils->users->name }}</td>
                                                    <td>{{ $reunion->date_time }} </td>
                                                    <td>{{ $reunion->description }} </td>
                                                    </tr>
                                                @endif
                                        @endforeach
                                    @endcan

                                    @can('student-action')
                                        @foreach($reunions as $reunion)
                                            @if(($reunion->pupil_id)==$pupil_id)
                                                    <tr>
                                                    <td>{{ $reunion->tutors->users->name }}</td>
                                                    <td>{{ $reunion->date_time }} </td>
                                                    <td>{{ $reunion->description }} </td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                    @endcan
                                </tbody>
                            </table>
                        </div>
                    </div>  

                    <br>

                    @can('tutor-action')
                        <div class="card"><a name="mPupilos" id="mPupilos"></a>
                            <div class="card-header"> <h5>Mis Pupilos</h5> <a href="#inicio">Inicio</a></div>
                            
                                <div class="card-body">
                                    <a href="#">
                                        <button type="button" class="btn btn-warning float-left">Administrar</button>
                                    <a>
                                    <br>
                                    <hr>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">p_id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Facultad</th> 
                                            <th scope="col">Accion</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pupils as $pupil)
                                                @if(($pupil->tutor_id)==$tutor_id)
                                                    <th scope="row">{{ $pupil->users->id }}</th>
                                                        <td>{{ $pupil->id }}</td>
                                                        <td>{{ $pupil->users->name }}</td>
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
                            </div>   
                        </div> 
                    @endcan

                </div> 
            @endcan 
            
        </div>
    </div>
</div>
@endsection
