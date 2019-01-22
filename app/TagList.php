<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagList extends Model
{
    protected $fillable = [  'organisation_id','name', 'user_id'];
}
