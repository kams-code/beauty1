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

   public function user(){
       return $this->belongsTo('App\User');
   }

   public function jour(){
       return $this->hasMany('App\Jours');
   }
}
