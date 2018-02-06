<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class False_product extends Model
{
    //
    protected $guarded = [];
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function Original_product(){
        return $this->hasOne(Original_product::class);
    }
}
