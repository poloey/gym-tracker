<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
  protected $guarded = [];
  public function exercises () {
    return $this->hasMany(Exercise::class);
  }
}
