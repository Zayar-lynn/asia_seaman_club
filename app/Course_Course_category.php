<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Course_category extends Model
{
    protected $fillable = [
    	'id',
    	'course_id',
    	'category_id'
    ];
}
