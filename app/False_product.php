<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class False_product extends Model
{
    //
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
}
