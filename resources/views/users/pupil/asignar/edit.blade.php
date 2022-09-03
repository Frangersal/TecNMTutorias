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
            <h2 class="main_section_h2">Paso 2: Asignar tutor</h2>
            <section class="main_section_section">
                <div class="card-body">

                    <form action ="{{ route('users.pupil.asignar.update', $pupil->id)}}" method="POST">

                    @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group row">
                            <label for="tutor" class="col-md-2 col-form-label text-md-right">Tutor</label>

                            <select class="form-control opcion" name="txtTutorId"  > 
                                @foreach($tutors as $tutor)
                                        <option value="{{ $tutor->id }}">{{ $tutor->users->name }} </option>   
                                @endforeach 
                            </select>
                        </div>
                        <input  type="hidden" value="{{ $pupil->user_id }}" class="idUser" name="txtUserId">
                        
                        <button type="submit" class="btn btn-warning">Asignar</button>
                    </form>                    
                </div>
                
            </section>
        </section>

</main>
@endsection