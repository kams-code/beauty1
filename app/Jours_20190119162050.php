<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jours extends Model
{
    protected $fillable=[
        'nom'
    ];

    public function user(){
        return $this->belongTo('App\User');
    }
}
