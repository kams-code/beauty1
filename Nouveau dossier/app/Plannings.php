<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plannings extends Model
{
   protected $fillable = [  'organisation_id',
      'heureDeb',
      'heureFin',
      'dateDeb',
      'dateFin',
      'jour_id',
      'jours',
      'user_id'
   ];

   public function user(){
       return $this->belongsTo('App\User');
   }

   public function jour(){
       return $this->belongsTo('App\Jours');
   }
}
