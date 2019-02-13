<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'prenom',
        'code',
        'adresse',
        'email',
        'pays',
        'ville',
        'telephone'
               
    ];
    public function produits(){
        return $this->belongsTo(Produits::class);
    }

    public function equipement
}
