<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'link',
        'start_date',
        'end_date'
    ];

    function webpage(){
        return $this->hasMany('App\Ads_webpage');
    }
}
