<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = [  'organisation_id',
    'produits_id_qte','client_id'
];
}
