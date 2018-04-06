<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
  protected $guarded = [];
  public function gym () {
    return $this->belongsTo(Gym::class);
  }
}
