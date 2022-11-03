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
                <h2 class="flex_section_h2">Crear Fomulario</h2>
                <section class="flex_section_section">
                    <div class="card-body"> 

                        <form action ="{{ route('admin.forms.store')}}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="txtName" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input id="txtName" type="text" class="form-control @error('txtName') is-invalid @enderror" name="txtName" >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label for="txtDescription" class="col-sm-2 col-form-label">Descripcion</label>
                                <div class="col-sm-10">
                                    <input id="txtDescription" type="text" class="form-control @error('txtDescription') is-invalid @enderror" name="txtDescription" >

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                                <input id="create" type="hidden" value="create" class="create" name="create">
                            <button onclick="desaparecerCEQ()" type="submit" class="btn btn-success">Solo Crear Formulario</button>
                            <br><br>
                                <input id="create_editQuestion" type="hidden" value="create_editQuestion" class="create_editQuestion" name="create_editQuestion">
                            <button onclick="desaparecerC()" type="submit" class="btn btn-primary" >Crear Formulario y editar preguntas</button>
                        </form>       
                     
                    </div>
                </section>
            </section>
        </section>
    </article> 
</main>


<script>
function desaparecerCEQ() {
  const element = document.getElementById("create_editQuestion");
  element.remove();
}
function desaparecerC() {
  const element = document.getElementById("create");
  element.remove();
}
</script>
@endsection