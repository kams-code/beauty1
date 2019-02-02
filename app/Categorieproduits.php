<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorieproduits extends Model
{
   
    protected $fillable = [  
      
        'nom',
        'description',
        'image'
    ];
}
