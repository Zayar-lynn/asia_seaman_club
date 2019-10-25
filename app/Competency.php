<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    protected $fillable = [
        'seafarer_id',
        'rank',
        'issuing_country',
        'number',
        'issuing_date',
        'expires_date',
        'competency_photo'
    ];
}
