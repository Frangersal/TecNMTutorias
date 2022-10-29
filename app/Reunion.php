<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Reunion (Reunion)
class Reunion extends Model
{
    //Proteccion la tabla'reunions' de la vista de los usuarios finales
    protected $table ='reunions';
    //Datos de la tabla 'reunions' que pueden ser llenados
    protected $fillable = [
        'date_time','description','tutor_id','pupil_id',
    ];
    //--Funciones de manejo de relaciones--
    public function tutors()
    {
        // Relacion ('Reunion'/Reunion) (Pertenece a / 1 a 1) ('Tutor'/Tutor)
        return $this->belongsTo('App\Tutor', 'tutor_id');
    }

    public function pupils()
    {
        // Relacion ('Reunion'/Reunion) (Pertenece a / 1 a 1) ('Pupil'/Pupilo)
        return $this->belongsTo('App\Pupil', 'pupil_id');
    }
}
