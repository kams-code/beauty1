<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plannings extends Model
{
   protected $fillable = [  'organisation_id',

   'jour',
   'etat',
   'heureouverture',
   'heurefermeture',
   
  

      'user_id'
   ];

   public function user(){
       return $this->belongsTo('App\User');
   }

   public function jour(){
       return $this->belongsTo('App\Jours');
   }
}
