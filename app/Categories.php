<?php

namespace App;

use App\Posts;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function  posts()
   {
    return $this->hasMany('App\Posts');
   }
}
