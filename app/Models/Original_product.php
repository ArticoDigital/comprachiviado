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
    public function media_products() {
        return $this->morphMany('Media_product', 'products');
    }
}
