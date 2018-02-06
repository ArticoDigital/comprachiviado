<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function false_products(){
        return $this->hasMany(False_product::class);
    }

}
