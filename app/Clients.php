<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'prenom',
        'pays',
        'ville',
        'image',
        'adresse',
        'email',
        'telephone' 
       
    ];

    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
}
