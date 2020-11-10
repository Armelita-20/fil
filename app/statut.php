<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statut extends Model
{
    protected $guarded= [];
    public function menagere(){
        return $this->belongsTo('App\Menagere','id');
    }
}
