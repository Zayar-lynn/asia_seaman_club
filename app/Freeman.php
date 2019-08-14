<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freeman extends Model
{
    protected $fillable = [
        'id',
        'name',
        'occupation',
        'id_card',
        'front_photo',
        'back_photo',
        'phone',
        'address',
        'street',
        'city',
        'state',
        'email',
        'referral_code'
    ];
}
