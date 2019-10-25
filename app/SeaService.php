<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeaService extends Model
{
    protected $fillable = [
        'id',
        'seafarer_id',
        'vessel_name',
        'imo_number',
        'vessel_type_id',
        'flag',
        'sign_on_date',
        'sign_off_date',
        'sign_off_reason',
        'crewing_company_name',
        'crewing_name',
        'crewing_email',
        'crewing_phone',
        'seaservice_confirm_photo'
    ];
}
