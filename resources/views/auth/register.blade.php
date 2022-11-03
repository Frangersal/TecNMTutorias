@extends('layouts.app')

@section('content')
<main class="main mainWithOutNav">
    <nav clasS="title">
        <h1 class="title_h1">
            Tutorias ITA
        </h1>
        <img class="title_img" src="{{asset('/images/Logo-ITA.png')}}" alt="">
    </nav>

    <article class="flex-container">
        <section class="flex-item-large"> 
            <section class="flex_section">
                <h2 class="flex_section_h2"> {{ __('Registrarse') }}</h2>
                <section class="flex_section_section">
                    <div class="card-body">  
                
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"  class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>

                                <div class="col-sm-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <label for="campus"  class="col-sm-2 col-form-label">{{ __('Campus') }}</label>

                                <div class="col-sm-10">
                                    <!-- <input id="campus" type="text" class="form-control @error('campus') is-invalid @enderror" campus="campus" value="{{ old('campus') }}" required autocomplete="campus" autofocus> -->
                                    <select class="form-control campus" name="campus" >    
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
                                <label for="faculty"  class="col-sm-2 col-form-label">{{ __('Facultad') }}</label>

                                <div class="col-sm-10">
                                    <!-- <input id="faculty" type="text" class="form-control @error('faculty') is-invalid @enderror" faculty="faculty" value="{{ old('faculty') }}" required autocomplete="faculty" autofocus> -->
                                    <select class="form-control faculty" name="faculty" >    
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
                                <label for="controlNumber"  class="col-sm-2 col-form-label">{{ __('Numero de control') }}</label>

                                <div class="col-sm-10">                            
                                    <input id="controlNumber" type="text" class="form-control @error('controlNumber') is-invalid @enderror" name="controlNumber"  required >

                                    @error('controlNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 
                            <hr> 
                            <div class="row mb-3">
                                <label for="email"  class="col-sm-2 col-form-label">{{ __('Correo electronico') }}</label>

                                <div class="col-sm-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"  class="col-sm-2 col-form-label">{{ __('Contraseña') }}</label>

                                <div class="col-sm-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"  class="col-sm-2 col-form-label">{{ __('Confirmar contraseña') }}</label>

                                <div class="col-sm-10">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="boton-azul">
                                        {{ __('Registrarme') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection
