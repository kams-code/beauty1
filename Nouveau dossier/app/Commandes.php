<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $fillable = [  //'organisation_id',

        'nom',
        'quantite',
        'fournisseur_id',
        'produit_id',
        'user_id',
        'etat'
       // 'quantites'
               
    ];

    public function produits()
    {
        return $this->belongsToMany('App\Produits');
    }

}
