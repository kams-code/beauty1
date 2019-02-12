<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnements extends Model
{
    protected $fillable = [  'organisation_id',
    'code','nominstitut','datedebut','etat',

    'type',
           
];
}
