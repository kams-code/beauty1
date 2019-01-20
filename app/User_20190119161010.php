<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function services()
    {
        return $this->belongsToMany('App\Services');
    }

    public function reservations(){
        return $this->hasMany('App\Reservations');
    }

    public function plannings(){
        return $this->hasMany('App\P')
    }

    /*public function service_users()
    {
        return $this->hasMany('App\ServiceUser');
    }*/
}
