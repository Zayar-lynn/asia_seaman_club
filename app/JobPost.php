<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'id',
        'company_id',
        'rank',
        'salary',
        'contract_time',
        'vessel_name',
        'shiptype_id',
        'grt',
        'flag_of_vessel',
        'navigation_area',
        'request_certificates',
        'description',
        'english_level'
    ];
}
