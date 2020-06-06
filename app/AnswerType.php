<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerType extends Model
{
    //
    protected $table ='answers_types';

    protected $fillable = [
        'name','description',
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
