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
            'is_promote'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function serviceusers()
    {
        return $this->hasMany('App\ServiceUser');
    }
}
