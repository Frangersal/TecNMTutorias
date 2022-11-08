@extends('layouts.app')

@section('content')
<title>Editar Usuario</title> 
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
                <h2 class="flex_section_h2">Paso 1: Editar informacion de usuario</h2>
                <section class="flex_section_section">
                    <div class="card-body">  

                        <form action ="{{ route('admin.users.update', $user)}}"  enctype="multipart/form-data" method="POST">

                            <div class="row mb-3">
                                <label for="email" class="col-md-2 col-form-label text-md-right">E-Mail</label>
                                <div class="col-sm-10"> 
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 

                            <div class="row mb-3">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Name</label> 
                                <div class="col-sm-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="campus" class="col-md-2 col-form-label text-md-right">Campus</label> 
                                <div class="col-sm-10">
                                    <select id="campus" class="form-control @error('campus') is-invalid @enderror campus" 
                                    name="campus" value="{{ $user->campus }}" required autofocus>   
                                        <option value="{{ $user->campus }}">{{ $user->campus }}</option>  
                                        <option value="Instituto Tecnológico de Acapulco">I.T.A.</option> 
                                        <option value="Instituto Tecnológico de ">I.T.Q.</option>  
                                    </select>
                                    @error('campus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="faculty" class="col-md-2 col-form-label text-md-right">Faculty</label> 
                                <div class="col-sm-10">
                                    <select id="faculty" class="form-control  @error('faculty') is-invalid @enderror faculty" name="faculty" value="{{ $user->faculty }}" required autofocus >    
                                        <option value="{{ $user->faculty }}">{{ $user->faculty }}</option> 
                                        <option value="Arquitectura">Arqui.</option> 
                                        <option value="Ingeniería en Sistemas Computacionales">I.S.C.</option>     
                                        <option value="Ingeniería Electromecanica">I.E.</option>     
                                        <option value="Ingeniería Bioquímica">I.Bq.</option>          
                                        <option value="Ingeniería en Gestión Empresarial">I.G.E.</option>    
                                        <option value="Licenciatura en Administración">L.A.</option>     
                                        <option value="Contador Público">C.P.</option>                 
                                    </select>
                                    @error('faculty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="controlNumber" class="col-md-2 col-form-label text-md-right">Control number</label> 
                                <div class="col-sm-10">
                                    <input id="controlNumber" type="text" class="form-control @error('controlNumber') is-invalid @enderror" name="controlNumber" value="{{ $user->controlNumber }}" maxlength="8" required autofocus>

                                    @error('controlNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="picture" class="col-md-2 col-form-label text-md-right">Foto</label> 
                                <div class="col-sm-10">
                                    <input id="picture" type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" value="{{ $user->picture }}" required autofocus>

                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            @csrf
                            {{ method_field('PUT') }}
                            
                            <hr>
                            <div class="row mb-3">
                                <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                                <div class="col-sm-10">
                                    @foreach($roles as $role)
                                        <div class="form-check">
                                            <input type="radio" name="roles[]" value="{{ $role->id }}"
                                            @if ($user->roles->pluck('id')->contains($role->id)) checked @endif> 
                                            <label>{{$role->name }} </label>
                                        
                                        </div>
                                    @endforeach 
                                </div>
                            </div>
                            <hr>

                            <!-- value="{{ $user->faculty }}"  -->
                            <!--
                            @csrf
                            {{ method_field('PUT') }}
                            
                            <div class="row mb-3">
                                <label for="tutores" class="col-md-2 col-form-label text-md-right">Asignar tutor</label>
                                <div class="col-sm-10">
                                    <select id="asignar" class="form-control  @error('asignar') is-invalid @enderror asignar" name="asignar" required autofocus >  
                                        @foreach($tutors as $tutor)
                                            <option value="{{$tutor->id }}">{{$tutor->name }}</option> 
                                        @endforeach 

                                    </select>
                                </div>
                            </div>
                            <hr>
                            -->
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </form>                    
                    </div>
                </section>
            </section>
        </section>
    </article>  
</main>
@endsection