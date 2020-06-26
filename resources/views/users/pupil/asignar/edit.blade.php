@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h5>Asignar tutor MUAJAJAJA</h5></div>

                <div class="card-body">

                    <form action ="{{ route('users.pupil.asignar.update', $pupil->id)}}" method="POST">

                    @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group row">
                            <label for="tutor" class="col-md-2 col-form-label text-md-right">Tutor</label>

                            <select class="form-control opcion" name="txtTutorId" > 
                                @foreach($tutors as $tutor)
                                        <option value="{{ $tutor->id }}">{{ $tutor->id }}</option>   
                                @endforeach 
                            </select>
                        </div>
                        <input  type="hidden" value="{{ $pupil->user_id }}" class="idUser" name="txtUserId">
                        
                        <button type="submit" class="btn btn-warning">Asignar</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection