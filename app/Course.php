<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'description',
    	'price',
        'teacher_id',
        'photo'
    ];
}
