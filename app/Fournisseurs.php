<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    protected $fillable = [

        'nom',
        'prenom',
        'code',
        'adresse',
        'email',
        'telephone'
               
    ];
    public function produits(){
        return $this->belongsTo(Produits::class);
    }
}
