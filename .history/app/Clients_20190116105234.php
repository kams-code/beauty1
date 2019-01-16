<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'prenom',
        'adresse',
        'email',
        'telephone' 
       
    ];

    public function reservations(){
        
    }
}
