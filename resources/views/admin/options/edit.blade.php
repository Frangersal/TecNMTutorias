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
            <h2 class="main_section_h2">Editar opcion " {{ $option->name }} "</h2>
            <section class="main_section_section">
                <div class="card-body">

                    <!--- Editar Opcion ---> 
                    <form action ="{{ route('admin.options.update', $option->id)}}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="txtName" class="col-md-3 col-form-label text-md-right">Cambiar Opcion</label>

                            <div class="col-md-6">
                                <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" value="{{ $option->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- ID Question-->
                        <input  type="hidden" value="{{ $option->question_id }}" id="txtIdQuestion" name="txtIdQuestion">

                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </form> 
                </div>
                
            </section>
        </section>

   
</main>
@endsection