<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
 
public function role()
{
    return $this->belongsTo('App\Role');
}
}
