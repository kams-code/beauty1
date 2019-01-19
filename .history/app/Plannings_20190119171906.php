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
      'jour_id',
      'user_id'
   ];

   public function use(){
       return $this->belongTo('App\User');
   }

   public function jours(){
       return $this->hasMany('App\Jours');
   }
}
