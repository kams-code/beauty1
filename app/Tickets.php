<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{protected $fillable = [

    'titre',
    'type',
    'valeur',
    'etat',
    'service_id',
           
];
protected $casts = [ 'etat' => 'boolean' ];
}
