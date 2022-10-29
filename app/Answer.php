<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Answers (Respuesta)
class Answer extends Model
{
    //Proteccion la tabla'answers' de la vista de los usuarios finales
    protected $table ='answers';
    //Datos de la tabla 'answers' que pueden ser llenados
    protected $fillable = [
        'name','question_id','user_id',
    ];

    //--Funciones de manejo de relaciones--
    public function users()
    {
        // Relacion ('Answer'/Respueta) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User', 'user_id');
    }

    public function questions()
    {
        // Relacion ('Answer'/Respueta) (Pertenece a / 1 a 1) ('Question'/Pregunta)
        return $this->belongsTo('App\Question', 'question_id');
    }

}
