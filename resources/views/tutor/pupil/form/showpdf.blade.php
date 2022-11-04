<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
:root{
    --color-primario: #233D7B;
    --color-secundario: #080F1F;
    --color-terciario: #fff;
}

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
thead {
    background-color:#1a2b53;
    padding: 5px;
    color: white;
}

td {
    border-bottom: 2px solid #ddd;
    border-right: 3px solid #ddd;
    border-left: 3px solid #ddd;
}
.preguntas{
    text-align:justify;
    padding: 5px;
}
.respuestas{
    text-align:center;
}

table {
    margin-left: 10%;
    width: 80%;
    border-collapse: collapse;
}
tr:nth-child(even) {background-color: #ddd;}
.tr-especial{
    background-color:#233D7B;
}
h1{
    padding: 25px;
}
i{
    margin-left: 15%;
}
body {
    margin-top: 2.1cm;
    margin-bottom: 2.1cm;
}
/** Definir las reglas del encabezado **/
header {
    position: fixed;
    top: 0cm;
    left: 0cm;
    right: 0cm;
    height: 2cm;

    
    background-color: #233D7B;
    color: white;
    text-align: center;
    line-height: 1.5cm;
}

/** Definir las reglas del pie de página**/
footer {
    position: fixed; 
    bottom: 0cm; 
    left: 0cm; 
    right: 0cm;
    height: 2cm;

    background-color: #233D7B;
    color: white;
    text-align: center;
    line-height: 1.5cm;
} 

.nav_img{
    margin-left: 10%;
    background-color: #fff;
    
    border-style: solid;
    border-color: #fff;
    height: 7rem;
    width: 7rem;
    border-radius: 15%;
}
</style>
<body >
    <div>
        <div>
            <h1>
                Ver Formularios contestados por: {{ $pupilName }}
            </h1>
        </div>
    </div>


    <div >
        <img class="nav_img" src="{{asset($pupilPicture)}}" alt="Foto de {{ $pupilName }}"> 
        <br><br>
        
        @foreach($forms as $form)
            <br>
            <table>
                <thead>
                    <tr>
                        <th colspan="2"> <h2>{{ $form->id }}.- {{ $form->name }}: </h2></th>
                    </tr>
                    <tr class="tr-especial">
                        <th colspan="2">{{ $form->description }}</th>
                    </tr>
                    <tr class="tr-especial">
                        <th>Preguntas</th>
                        <th>Respuestas</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($questions as $question)
                        @if(($form->id)==($question->form_id))
                            <tr>
                                <td class="preguntas"> {{ $question->name }}</td>
                                    @foreach($answers as $answer)
                                        @if((($question->id)==($answer->question_id))&& ($answer->user_id)==($id) )
                                        <td class="respuestas"><i>" {{ $answer->name }} "</i></td>
                                        @endif
                                    @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <p>
                <i>Formulario contestado por {{ $pupilName }}.</i>
            </p>
            <br>
        @endforeach

       
    </div>
     <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
     <header>
        Tutorias respuestas del estudiante: {{ $pupilName }}.
    </header>

    <footer>
        Tecnológico Nacional de México | Campus Acapulco |  <?php echo date("Y");?> 
    </footer>
</body>
</html>