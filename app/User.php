<?php

namespace App;
//Libreria MustVerifyEmail para la verificacion por correo electronico
use Illuminate\Contracts\Auth\MustVerifyEmail;
//Libreria User para la Autenticacion de usuarios
use Illuminate\Foundation\Auth\User as Authenticatable;
//Libreria Notifiable para la creacion de Notificaciondes para los usuarios
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //Datos de la tabla 'users' que pueden ser llenados
    protected $fillable = [
        'name', 'campus', 'faculty','controlNumber', 'email', 'password','picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //Datos de la tabla 'users' que pueden ser llenados pero de forma oculta
     protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //--Funciones de manejo de relaciones--
    public function roles()
    {
        // Relacion ('User'/Usuaro) (Pertenece a muchos / muchos a muchos) ('Role'/Rol)
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function forms()
    {
        // Relacion ('User'/Usuaro) (Pertenece a muchos / muchos a muchos) ('Form'/Formulario)
        return $this->belongsToMany('App\Form', 'form_user_table', 'user_id', 'form_id');
    }

    public function answers()
    {
        // Relacion ('User'/Usuaro) (Tiene muchos / Muchos a 1) ('Answer'/Respuesta)
        return $this->hasMany('App\Answer');
    }
    
    public function tutors()
    {
        // Relacion ('User'/Usuaro) (Tiene muchos / Muchos a 1) ('Tutor'/Tutor)
        return $this->hasMany('App\Tutor');
    }
    public function pupils()
    {
        // Relacion ('User'/Usuaro) (Tiene muchos / Muchos a 1) ('Pupil'/Pupilo)
        return $this->hasMany('App\Pupil');
    }
    //--Funciones de manejo de roles--
    //Funcion 'Tiene algun rol'
    public function hasAnyRoles($roles){
        //Si el parametro $roles esta en la funcion roles como atributo 'name' retornar true
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        //...de lo contrario retornar false
        return false;
    }
    //Si el parametro $roles esta en la funcion roles como atributo 'name' retornar true
    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        //...de lo contrario retornar false
        return false;
    }
}
