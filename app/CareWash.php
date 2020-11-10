<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareWash extends Model
{
    protected $guarded=[];
  public function numero(){
      return $this->belongsTo('App\Numero');
  }
}
