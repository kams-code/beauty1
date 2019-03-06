<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model 


{
    protected $fillable = [ 
       'code',
       'datereserver',
       'heurereserver',
       'avances',
       'etat'
    ];

    public function client(){
        return $this->belongsTo('App\Clients');
    }

    public function service(){
        return $this->belongsTo('App\Services');
    }

    public function formule(){
        return $this->belongsTo('App\Formule');
    }
    public function taxe(){
        return $this->belongsTo('App\Taxes');
    }

    public function paiement(){
        return $this->belongsTo('App\Paiement');
    }
   
}
