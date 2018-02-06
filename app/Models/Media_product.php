<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media_product extends Model
{
    //
    protected $guarded = [];
    public function media_Type(){
        return $this->belongsTo(Media_type::class);
    }
}
