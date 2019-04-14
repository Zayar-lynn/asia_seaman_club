<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPhoto extends Model
{
    protected $fillable = ['id','title','photo','company_id'];
}
