<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'phone','email',
        'company_type',
        'what_we_do',
        'why_join_us',
        'workplace_and_culture',
        'photo',
        'address',
        'facebook_url',
        'website_url'
    ];
}
