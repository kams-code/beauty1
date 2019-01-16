<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
       'code',
       'client_id'
    ];

    public function client(){
        return $this->belongsTo('App\Clients');
    }
}
