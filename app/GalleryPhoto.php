<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    protected $fillable = [
        'id',
        'gallery_id',
        'photo'
    ];
}
