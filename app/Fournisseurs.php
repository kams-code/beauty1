<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    public function produits(){
        return $this->belongsTo(Produits::class);
    }
}
