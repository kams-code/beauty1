<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jours extends Model
{
    protected $fillable=[
        'nom'
    ];

    public function planning(){
        return $this->belongTo('App\Plannings');
    }
}
