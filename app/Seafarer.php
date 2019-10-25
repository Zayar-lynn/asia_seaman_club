<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seafarer extends Model
{
    protected $fillable=[
        'photo',
        'email',
        'phone',
        'location',
        'name',
        'gender',
        'dob',
        'citizenship',
        'rank',
        'additional_rank1',
        'additional_rank2',
        'contact_phone',
        'contact_email',
        'address_country_id',
        'address_city',
        'address_zip',
        'address_home_airport',
        'english_level',
        'english_certificate',
        'height',
        'eye_color',
        'boiler_suit_size',
        'weight',
        'hair_color',
        'boot_size',
        'resume_file'
    ];
}
