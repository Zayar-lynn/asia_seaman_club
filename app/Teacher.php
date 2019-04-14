<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'phone',
    	'email',
    	'teacher_type'
    ];
}
