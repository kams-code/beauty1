<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = []
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
