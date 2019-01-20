<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plannings extends Model
{
   protected $fillable = [
      'heureDeb',
      'heureFin',
      'dateDeb',
      'dateFin',
      'jour',
      'user_id'
   ];

   public function user(){
       return $this->belongTo('App\User');
   }
}
