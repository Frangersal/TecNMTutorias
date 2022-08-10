<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosCrud extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'campus', 'faculty','controlNumber', 'email', 'password','picture'
    ];

}
