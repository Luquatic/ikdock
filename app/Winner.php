<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $table = "winners";

    public function winnerVideo(){
      return $this->hasOne("App\Video","video","video");
    }
}
