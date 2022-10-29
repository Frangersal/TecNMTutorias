<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Tutor (Tutor)
class Tutor extends Model
{
    //Proteccion la tabla'tutors' de la vista de los usuarios finales
    protected $table ='tutors';
    //Datos de la tabla 'tutors' que pueden ser llenados
    protected $fillable = [
        'description','user_id',
    ];
    //--Funciones de manejo de relaciones--
    public function users()
    {
        // Relacion ('Tutor'/Tutor) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User', 'user_id');
    }

    public function reunions()
    {
        // Relacion ('Tutor'/Tutor) (Tiene muchos / Muchos a 1) ('Reunion'/Reunion)
        return $this->hasMany('App\Reunion');
    }
}