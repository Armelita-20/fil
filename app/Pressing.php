<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pressing extends Model
{

protected $guarded=[];
    public function numero(){
        return $this->belongsTo('App\Numero');
    }
}
