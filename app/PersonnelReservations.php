<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelReservations extends Model
{
    protected $fillable = [  

        'reservation_id',
        'service_id',
        'user_id',
        'horaire',
               
    ];
}
