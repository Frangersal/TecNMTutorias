<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <div>
            <h5>
                Ver Formularios contestados por: {{ $data->pupilName }}
            </h5>
        </div>
        <div>
        
        @foreach($data->forms as $form)
            <table>
                <thead>
                    <tr>
                        <th>{{ $form->name }}</th>
                        <th>{{ $form->description }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data->questions as $question)
                        @if(($form->id)==($question->form_id))
                            <tr>
                                <td>{{ $question->name }} :</td>
                                @foreach($data->answers as $answer)
                                    @if((($question->id)==($answer->question_id))&& ($answer->user_id)==($data->id) )
                                        <td><i>{{ $answer->name }} </i></td>
                                    @endif
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endforeach

    </div>
       
    </div>
    
</body>
</html>