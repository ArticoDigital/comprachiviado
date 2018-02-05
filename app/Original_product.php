<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Original_product extends Model
{
    //
    public function falseProduct(){
        return $this->belongsTo(False_product::class);
    }
}
