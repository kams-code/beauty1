<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'intitule',
        'image'
    ];
    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
}
