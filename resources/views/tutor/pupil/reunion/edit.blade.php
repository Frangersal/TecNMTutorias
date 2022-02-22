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
                <div class="card-header"> <h5> Editar Reunion  </h5> </div>

                <div class="card-body">

                    <!--- Editar formulario ---> 
                    


                    <!-- JAAAAAAAAAAAAAAAAAAAAAA -->

                    
                    <form action ="{{ route('tutor.pupil.reunion.update', $reunion->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}  

                        <div class="form-group row">
                            <label for="txtDate_time" class="col-md-3 col-form-label text-md-right">Fecha y hora</label>

                            <div class="col-md-6">
                                <input type="datetime-local"  class="form-control @error('txtxtDate_timetName') is-invalid @enderror"
                                id="txtDate_time"
                                name="txtDate_time"     value="2017-06-12T19:30"
                                min="2017-06-07T00:00"  max="2100-06-14T00:00">

                                <!-- <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" > -->

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="txtDescription" class="col-md-3 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input id="txtDescription" type="text" class="form-control @error('txtDescription') is-invalid @enderror" name="txtDescription" >

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="txtPupil" class="col-md-3 col-form-label text-md-right">Pupilo</label>
                            <div class="col-md-6">
                            
                            <select class="form-control opcion" name="txtPupil" > 
                                @foreach($pupils as $pupil)
                                    @if(($pupil->tutor_id)==3)
                                        <option value="{{ $pupil->id }}">{{ $pupil->id }}</option> 
                                    @endif                               
                                          
                                @endforeach 
                            </select>
                            </div>
                        </div>
                        <input  type="hidden" value="{{ $tutor_id }}" class="idTutor" name="txtTutor">
                        <!-- {{ $tutor_id }} -->
                        

                        <button type="submit" class="btn btn-success">Editar</button>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
</main>
@endsection