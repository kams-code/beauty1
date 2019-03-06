<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'prenom',
       
        'ville',
        'image',
        'adresse',
        'email',
        'telephone' ,
        'codepromo',
        'id_ticket',
       
    ];

    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
}
