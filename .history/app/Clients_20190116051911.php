<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'pays',
        'ville',
        'description',
        'adresse',
        'telephone',
        'online'
       
    ];
}