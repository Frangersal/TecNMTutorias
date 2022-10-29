<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Pupil (Pupilo)
class Pupil extends Model
{
    //Proteccion la tabla'pupils' de la vista de los usuarios finales
    protected $table ='pupils';
    //Datos de la tabla 'pupils' que pueden ser llenados
    protected $fillable = [
        'coment','tutor_id','user_id',
    ];
    //--Funciones de manejo de relaciones--
    public function tutors()
    {
        // Relacion ('Pupils'/Pupilos) (Pertenece a / 1 a 1) ('Tutor'/Tutor)
        return $this->belongsTo('App\Tutor', 'tutor_id');
    }

    public function users()
    {
        // Relacion ('Pupils'/Pupilos) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function reunions()
    {
        // Relacion ('Pupils'/Pupilos) (Tiene muchos / Muchos a 1) ('Reunion'/Reunion)
        return $this->hasMany('App\Reunion');
    }
}
