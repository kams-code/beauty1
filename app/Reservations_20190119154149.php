<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
       'code',
       'date'
       'client_id',
       'service_id'
    ];

    public function client(){
        return $this->belongsTo('App\Clients');
    }

    public function service(){
        return $this->belongsTo('App\Services');
    }
}
