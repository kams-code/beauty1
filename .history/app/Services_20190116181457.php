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

    public function role_users()
    {
        return $this->hasMany('App\RoleUser');
    }
}
