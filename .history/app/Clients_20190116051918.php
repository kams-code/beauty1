<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'pre',
        'ville',
        'description',
        'adresse',
        'telephone',
        'online'
       
    ];
}
