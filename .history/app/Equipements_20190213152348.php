<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipements extends Model
{
    protected $fillable = [  'organisation_id',

        'nom',
        'description',
        'fournisseur_id',
        'image'
               
    ];

    public function fournisseurs(){
        return $this->belongsTo(Fournisseurs::class);
    }
}
