<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table ='tutors';

    protected $fillable = [
        'description','user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function reunions()
    {
        return $this->hasMany('App\Reunion');
    }
}
