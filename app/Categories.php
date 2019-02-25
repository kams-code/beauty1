<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [  'organisation_id',
      
        'nom',
        'description',
        'image'
    ];
     
    public function services(){
        return $this->hasMany(Services::class);
    }
}
