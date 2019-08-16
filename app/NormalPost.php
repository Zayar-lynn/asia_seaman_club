<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NormalPost extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'photo',
        'description',
        'status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','post_id');
    }
}
