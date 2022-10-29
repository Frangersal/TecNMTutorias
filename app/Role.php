<?php

namespace App;
//Libreria Model de Eloquent
use Illuminate\Database\Eloquent\Model;
//Modelo de Role (Rol)
class Role extends Model
{
    //Proteccion la tabla'roles' de la vista de los usuarios finales
    protected $table ='roles';
    //--Funciones de manejo de relaciones--
    public function users()
    {
        // Relacion ('Role'/Rol) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User');
    }
}