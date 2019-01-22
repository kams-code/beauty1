<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
   
    protected $fillable = [  'organisation_id',

        'nom',
        'code',
        'montant',
        'is_paid'

        
               
    ]; 
}
