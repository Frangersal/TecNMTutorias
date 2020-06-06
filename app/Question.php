<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table ='questions';

    protected $fillable = [
        'form_id','name','answer_type_id',
    ];

    public function forms()
    {
        return $this->belongsTo('App\Form','form_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function answer_type()
    {
        return $this->belongsTo('App\AnswersTypes','answer_type_id');
    }
}
