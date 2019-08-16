<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VesselType extends Model
{
    protected $fillable = [
        'id',
        'header',
        'vessel_name'
    ];
}
