<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaires extends Model
{
    protected $fillable = [  'organisation_id',

    'jour',
    'etat',
    'heureouverture',
    'heurefermeture'
    
   
];
}
