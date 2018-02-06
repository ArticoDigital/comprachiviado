<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Promo extends Model
{
    //
    protected $guarded = [];
    public function falseProduct(){
        return $this->belongsTo(False_product::class);
    }
    public function company(){
        return $this->hasOne(Company::class);
    }



}
