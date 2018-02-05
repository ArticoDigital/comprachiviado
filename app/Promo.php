<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    public function falseProduct(){
        return $this->belongsTo(False_product::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
