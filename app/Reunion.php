<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    protected $table ='pupils';

    protected $fillable = [
        'fecha','description','tutor_id','pupil_id',
    ];

    public function tutors()
    {
        return $this->belongsTo('App\Tutor', 'tutor_id');
    }

    public function pupils()
    {
        return $this->belongsTo('App\Pupil', 'pupil_id');
    }
}
