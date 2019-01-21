<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertickets extends Model
{
    protected $fillable = [
        'user_id', 'tiket_id',
    ];
}
