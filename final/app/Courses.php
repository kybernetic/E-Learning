<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function lessons() {
      $this->hasMany('App\Lessons');
    }
}
