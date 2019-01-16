<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
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