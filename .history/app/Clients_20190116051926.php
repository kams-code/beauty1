<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'prenom',
        'adress',
        'description',
        'adresse',
        'telephone',
        'online'
       
    ];
}
