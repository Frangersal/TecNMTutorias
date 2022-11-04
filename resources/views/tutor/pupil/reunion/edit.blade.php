@extends('layouts.app')

@section('content')
<title>Editar Reunión</title>
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
                <h2 class="flex_section_h2">Editar Reunión</h2>
                <section class="flex_section_section">
                    <div class="card-body">  
                    <form action ="{{ route('tutor.pupil.reunion.update', $reunion->id)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}  

                        <div class="row mb-3">
                            <label for="txtDate_time"class="col-sm-2 col-form-label">Fecha y hora</label>

                            <div class="col-sm-10">
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
                        

                        <div class="row mb-3">
                            <label for="txtDescription"class="col-sm-2 col-form-label">Descripcion</label>

                            <div class="col-sm-10">
                                <input id="txtDescription" type="text" class="form-control @error('txtDescription') is-invalid @enderror" name="txtDescription" >

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="txtPupil"class="col-sm-2 col-form-label">Pupilo</label>
                            <div class="col-sm-10">
                            
                            <select class="form-control opcion" name="txtPupil" > 
                                @foreach($pupils as $pupil)
                                    @if(($pupil->tutor_id)==$tutor_id) 
                                        <option value="{{ $pupil->id }}">{{ $pupil->users->name }}</option> 
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
                </section>
            </section>
        </section>
    </article> 
</main>
@endsection