<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function promos()
   {
       return $this->hasMany(Promo::class);
   }
}
