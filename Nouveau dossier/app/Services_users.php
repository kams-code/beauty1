<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services_users extends Model
{
    protected $fillable = [  'organisation_id',
       
        'user_id',
        'service_id'
     ];
 
}
