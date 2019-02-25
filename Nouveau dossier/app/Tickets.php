<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{protected $fillable = [  'organisation_id',

    'titre',
    'type',
    'valeur',
    'etat',
    'datedebut',
    'datefin',
    'services_id',
    'clients_id',
           
];
}
