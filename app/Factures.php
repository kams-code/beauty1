<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
   
    protected $fillable = [

        'nom',
        'code',
        'montant',
        'is_paid'

        
               
    ]; 
}
