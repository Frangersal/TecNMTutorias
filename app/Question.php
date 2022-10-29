<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Question (Pregunta)
class Question extends Model
{
    //Proteccion la tabla'questions' de la vista de los usuarios finales
    protected $table ='questions';
    //Datos de la tabla 'questions' que pueden ser llenados
   protected $fillable = [
        'form_id','name','answer_type_id',//'option',
    ];
    //--Funciones de manejo de relaciones--
    public function forms()
    {
        // Relacion ('Question'/Pregunta) (Pertenece a / 1 a 1) ('Form'/Formulario)
        return $this->belongsTo('App\Form','form_id');
    }

    public function answers()
    {
        // Relacion ('Question'/Pregunta) (Tiene muchos / Muchos a 1) ('Answer'/Respuesta)
        return $this->hasMany('App\Answer');
    }

    public function answer_option()
    {
        // Relacion ('Question'/Pregunta) (Tiene muchos / Muchos a 1) ('Option'/Opcion)
        return $this->hasMany('App\Option');
    }

    public function answer_type()
    {
        // Relacion ('Question'/Pregunta) (Pertenece a / 1 a 1) ('AnswersTypes'/Tipo de respuesta)
        return $this->belongsTo('App\AnswersTypes','answer_type_id');
    }
}
