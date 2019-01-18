<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fill
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
