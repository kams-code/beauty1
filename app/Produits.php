<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable = [

        'nom',
        'description',
        'fournisseur_id',
               
    ];

    public function fournisseur(){
        return $this->belongsTo(Fournisseurs::class);
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commandes');
    }
}
