<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seafarer extends Model
{
    protected $fillable = [
    	'id',
    	'employee_name',
    	'desired_salary',
    	'citizanship',
    	'phone',
    	'email',
        'seafarer_type',
    	'english_level',
    	'rank',
    	'birthday',
    	'place_of_birth',
    	'country_of_residence',
    	'address'
    ];
}
