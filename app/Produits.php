<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'description',
        'fournisseur_id',
        'image',
        'prix',
        'categori_id',
        'vendable',
        'stockable',
        'organisation_id'
               
    ];

    public function fournisseur(){
        return $this->belongsTo(Fournisseurs::class);
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commandes');
    }
}
