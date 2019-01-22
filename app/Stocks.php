<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $fillable = [  'organisation_id',

        'quantite_initial',
        'quantite_final',
        'quantite_limite',
        'produit_id',
               
    ];
}
