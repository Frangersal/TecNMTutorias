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
                    <h2 class="flex_section_h2">Paso 2: Asignar tutor</h2>
                    <section class="flex_section_section">
                        <div class="card-body">   

                    <form action ="{{ route('users.pupil.asignar.update', $pupil->id)}}" method="POST">

                    @csrf
                        {{ method_field('PATCH') }}
                        <div class="row mb-3">
                            <label for="tutor" class="col-md-2 col-form-label text-md-right">Tutor</label>
                            <div class="col-sm-10">

                                <select class="form-control opcion" name="txtTutorId"  > 
                                    @foreach($tutors as $tutor)
                                            <option value="{{ $tutor->id }}">{{ $tutor->users->name }} </option>   
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <input  type="hidden" value="{{ $pupil->user_id }}" class="idUser" name="txtUserId">
                        
                        <button type="submit" class="btn btn-warning">Asignar</button>
                    </form>                    
                </div>
                
            </section>
        </section>

</main>
@endsection