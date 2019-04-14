<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_blog extends Model
{
    protected $fillable = [
        'id',
        'title',
        'photo',
        'description'
    ];
}
