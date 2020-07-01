<?php

namespace App;

use App\Authors;
use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function  category()
   {
    return $this->belongsTo('App\Categories');
   }

   public function  author()
   {
    return $this->belongsTo('App\Authors');
   }
}
