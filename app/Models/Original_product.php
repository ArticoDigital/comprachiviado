<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Original_product extends Model
{
    //
    protected $guarded = [];
    public function falseProduct(){
        return $this->belongsTo(False_product::class);
    }
}
