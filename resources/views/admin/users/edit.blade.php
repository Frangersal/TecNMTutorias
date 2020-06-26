@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h5>Editar Usuarios y asignar Tutores </h5></div>

                <div class="card-body">

                    <form action ="{{ route('admin.users.update', $user)}}" method="POST">


                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="campus" class="col-md-2 col-form-label text-md-right">Campus</label>

                            <div class="col-md-6">
                                <!-- <input id="campus" type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" value="{{ $user->campus }}" required autofocus> -->
                                <select id="campus" class="form-control @error('campus') is-invalid @enderror campus" name="campus" value="{{ $user->campus }}" required autofocus>   
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

                        <div class="form-group row">
                            <label for="faculty" class="col-md-2 col-form-label text-md-right">Faculty</label>

                            <div class="col-md-6">
                                <!-- <input id="faculty" type="text" class="form-control @error('faculty') is-invalid @enderror" name="faculty" value="{{ $user->faculty }}" required autofocus> -->
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

                        <div class="form-group row">
                            <label for="controlNumber" class="col-md-2 col-form-label text-md-right">Control number</label>

                            <div class="col-md-6">
                                <input id="controlNumber" type="text" class="form-control @error('controlNumber') is-invalid @enderror" name="controlNumber" value="{{ $user->controlNumber }}" required autofocus>

                                @error('controlNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="picture" class="col-md-2 col-form-label text-md-right">Foto</label>

                            <div class="col-md-6">
                                <input id="picture" type="text" class="form-control @error('picture') is-invalid @enderror" name="picture" value="{{ $user->picture }}"autofocus>

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
                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                                @foreach($roles as $role)
                                    <div class="form-check">
                                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                        @if ($user->roles->pluck('id')->contains($role->id)) checked @endif> 
                                        <label>{{$role->name }} </label>
                                       
                                    </div>
                                @endforeach 
                            </div>
                        </div>
                        <hr>
                        

                        <!-- <div class="form-group row">
                            <label for="tutors" class="col-md-2 col-form-label text-md-right">Tutores</label>
                            <div class="col-md-6">
                                
                                    <div class="form-check">
                                        <input type="checkbox" name="tutors[]">
                                        <select id="campus" class="form-control @error('campus') is-invalid @enderror campus" name="campus" value="{{ $user->campus }}" required autofocus>   
                                            <option value="{{ $user->campus }}">{{ $user->campus }}</option> 
                                            @foreach($tutors as $tutor)                                             
                                            <option value="Instituto Tecnológico de Acapulco">{{$tutor->name }} </option> 
                                            @endforeach 
                                        </select>
                                        
                                        <label>{{$tutor->name }} </label>
                                    </div>
                                
                            </div>
                        </div> -->


                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection