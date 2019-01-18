<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    protected $fillable = [
        'user_id',
        'services_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
 
    public function service()
    {
        return $this->belongsTo('App\Services');
    }

    public function service_users()
    {
        return $this->hasMany('App\ServiceUser');
    }
}
