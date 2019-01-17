<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        $table->increments('id');
            $table->string('code');
            $table->string('nom');
            $table->string('description');
            $table->string('image');
            $table->integer('montant');
            $table->boolean('is_promote');
    ];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
