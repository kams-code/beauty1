<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'pays',
        'ville',
        'description',
        'adresse',
        'image',
        'telephone',
        'online'
       
    ];
}
