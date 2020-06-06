<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerOption extends Model
{
    //
    protected $table ='answers_options';

    protected $fillable = [
        'name','question_id',
    ];

    public function forms()
    {
        return $this->belongsTo('App\Question','question_id');
    }
}
