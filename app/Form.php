<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Form (Formulario)
class Form extends Model
{
    //Proteccion la tabla'forms' de la vista de los usuarios finales
    protected $table ='forms';
    //Datos de la tabla 'forms' que pueden ser llenados
    protected $fillable = [
        'name','description',
    ];
    //--Funciones de manejo de relaciones--
    public function users()
    {
        // Relacion ('Forms'/Formulario) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User');
    }

    public function questions()
    {
        // Relacion ('Forms'/Formulario) (Tiene muchos / Muchos a 1) ('Question'/Pregunta)
        return $this->hasMany('App\Quiestion');
    }
}