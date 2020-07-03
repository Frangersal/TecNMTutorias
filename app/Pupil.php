<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    protected $table ='pupils';

    protected $fillable = [
        'coment','tutor_id','user_id',
    ];

    public function tutors()
    {
        return $this->belongsTo('App\Tutor', 'tutor_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function reunions()
    {
        return $this->hasMany('App\Reunion');
    }
}
