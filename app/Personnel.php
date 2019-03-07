<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = [  'organisation_id',

    'nom',
    'prenom',
    'pays',
    'ville',
    'image',
    'adresse',
    'email',
    'telephone' ,
    'cv',
   
];
}
