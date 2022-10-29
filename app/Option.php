<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Option (Opcion)
class Option extends Model
{
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='answers_options';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'name','question_id',
    ];
    //--Funciones de manejo de relaciones--
    public function questions()
    {
        // Relacion ('Answers_options'/Opciones de respuesta) (Pertenece a / 1 a 1) ('Question'/Pregunta)
        return $this->belongsTo('App\Question','question_id');
    }
}
