<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seafarer_request extends Model
{
    protected $fillable = [
        'id',
        'company_id',
        'seafarer_id',
        'post_id',
        'post_type'
    ];
}
