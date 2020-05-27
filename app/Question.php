<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table ='questions';

    protected $fillable = [
        'form_id','name',
    ];

    public function forms()
    {
        return $this->belongsTo('App\Form','form_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
