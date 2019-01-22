<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'prenom',
        'adresse',
        'email',
        'telephone' 
       
    ];

    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
}
