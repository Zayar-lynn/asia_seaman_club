<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPost extends Model
{
    protected $fillable = [
    	'id',
    	'title',
        'description',
        'company_id',
        'photo',
        'start_date',
        'end_date',
        'time'
    ];
}
