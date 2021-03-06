<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipements extends Model
{
    protected $fillable = [

        'nom',
        'description',
        'fournisseur_id',
        'image'
               
    ];

    public function fournisseur(){
        return $this->belongsTo('App\Fournisseurs');
    }
}
