<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
     protected $fillable =['nom', 'prenom', 'tel', 'object', 'email', 'besoin'];
    // protected $guarded =[];
}
