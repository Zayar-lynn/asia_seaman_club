<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipmate extends Model
{
    protected $fillable=[
        'seafarer_id',
        'seafarer_friend_id',
        'status'
    ];
}
