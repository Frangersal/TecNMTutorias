<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'campus', 'faculty','controlNumber', 'email', 'picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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


    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function forms()
    {
        return $this->belongsToMany('App\Form', 'form_user_table', 'user_id', 'form_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    
    public function tutors()
    {
        return $this->hasMany('App\Tutor');
    }
    public function pupils()
    {
        return $this->hasMany('App\Pupil');
    }





    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        return false;
    }
    
    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }


}
