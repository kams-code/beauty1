<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formule extends Model
{
    protected $fillable = [  'nom',

    'prix',
    'services_id',
    
   ];
   public function reservations(){
        return $this->hasMany('App\Reservations');
    }
}
