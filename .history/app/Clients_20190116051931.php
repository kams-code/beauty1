<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'prenom',
        'adresse',
        'd',
        'adresse',
        'telephone',
        'online'
       
    ];
}
