<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceUser extends Model
{
    protected $fillable=[
        'user_id',
        ''
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
     
    public function service()
    {
        return $this->belongsTo('App\Services');
    }
}
