<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'contact_person_name',
        'position',
        'phone',
        'email',
        'business_type',
        'address',
        'street',
        'city',
        'state',
        'country_id',
        'website_url',
        'referral_code'
    ];
}
