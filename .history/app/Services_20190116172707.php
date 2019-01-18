<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public function services(){
        return $this->belongsToMany('App\Services');
    }
}
