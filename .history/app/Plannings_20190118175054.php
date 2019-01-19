<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plannings extends Model
{
   protected $fillable = [
      'heureDeb',
      'heureFin',
      

   ];

   public function user(){
       return $this->belongTo('App\User');
   }
}
