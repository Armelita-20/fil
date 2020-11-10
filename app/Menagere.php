<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menagere extends Model
{
    protected $guarded=[];
    public function statut(){
        return $this->hasMany('App\statut','statut_id','id');
    }
}
