<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'code',
        'nom',
        'description',
        'image',
        'montant',
        'is_promote',
        'categorie_id'
    ];
     
    public function reservations(){
        return $this->hasMany('App\Reservations');
    }
    
<<<<<<< HEAD
    
=======
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

   /* public function service_users()
    {
        return $this->hasMany('App\ServiceUser');
    }*/
>>>>>>> 853a1d843004e15a44a4e90995a74116547d3d2f

}
