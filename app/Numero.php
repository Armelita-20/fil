<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numero extends Model
{
    public function pressing(){
        return $this->hasOne('App\Pressing');
    }
}
