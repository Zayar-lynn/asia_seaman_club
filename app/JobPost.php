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
        'status',
        'post_start_date',
        'post_end_date',
        'post_start_time',
        'post_end_time',
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function vessel_type(){
        return $this->belongsTo('App\VesselType');
    }

    public function job_position(){
        return $this->belongsTo('App\JobPosition');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','post_id');
    }

}
