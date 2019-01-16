<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    protected $fillable = [

        'nom',
        'pays',
        'ville',
        'description',
        'adresse',
        'telephone',
        'online'
       
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'nom',
        'prenom',
        'adresse',
        'email',
        'telephone' 
       
    ];
}