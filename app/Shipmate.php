<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipmate extends Model
{
    protected $fillable=[
        'seafarer_id',
        'friend_seafarer_id',
        'status'
    ];
}
