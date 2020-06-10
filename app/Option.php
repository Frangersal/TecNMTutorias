<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $table ='answers_options';

    protected $fillable = [
        'name','question_id',
    ];

    public function questions()
    {
        return $this->belongsTo('App\Question','question_id');
    }
}
