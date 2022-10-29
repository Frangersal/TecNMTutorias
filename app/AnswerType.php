<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de AnswerType (Tipo de respuesta)
class AnswerType extends Model
{
    //Proteccion la tabla'answers_types' de la vista de los usuarios finales
    protected $table ='answers_types';
    //Datos de la tabla 'answers_types' que pueden ser llenados
    protected $fillable = [
        'name','description',
    ];

    public function questions()
    {
        // Relacion ('AnswerType'/Tipo de respuesta) (Tiene muchos / Muchos a 1) ('Question'/Pregunta)
        return $this->hasMany('App\Question');
    }
}
