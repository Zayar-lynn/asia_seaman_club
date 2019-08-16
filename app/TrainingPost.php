<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPost extends Model
{
    protected $fillable = [
    	'id',
        'company_id',
    	'title',
        'description',
        'training_for',
        'requirement',
        'duration',
        'photo',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'training_fee_amount',
        'fee_type',
        'enroll_limit',
        'contact_no',
        'online_banking',
        'benificiary_name',
        'account_number',
        'post_start_date',
        'end_start_date',
        'fee_point',
        'status',
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','post_id');
    }
}
