<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertickets extends Model
{
    protected $fillable = [  'organisation_id',
        'user_id', 'ticket_id',
    ];
}
