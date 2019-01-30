<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_abonnement extends Model
{   protected $fillable = [  'nom',

    'description',
    'dateDeb',
    'dateFin',
    'periode',
           
];
}
