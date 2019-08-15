<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'id',
        'company_id',
        'job_position_id',
        'vancant',
        'salary',
        'join_date',
        'contract_duration',
        'requirement',
        'vessel_name',
        'vessel_type_id',
        'build_year',
        'dwt',
        'flage',
        'main_engine',
        'crew_onboard',
        'sailing_area',
        'description',
        'english_level',
        'photo',
        'status'
    ];
}
