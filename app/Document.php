<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id',
        'seafarer_id',
        'document_name',
        'issuing_country_id',
        'number',
        'issuing_date',
        'expires_date',
        'document_photo'
    ];
}
