<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    //
    public function falseProduct(){
        return $this->belongsTo(False_product::class);
    }
}
