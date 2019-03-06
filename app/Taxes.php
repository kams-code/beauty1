<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxes extends Model
{
    protected $fillable = [
        'intitule',
        'typevaleur',
        'valeur'
    ];
}
