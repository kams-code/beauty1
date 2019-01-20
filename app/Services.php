<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'code',
        'nom',
        'description',
        'image',
        'montant',
        'is_promote',
        'categorie_id'
    ];
     
    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
    
    

}
