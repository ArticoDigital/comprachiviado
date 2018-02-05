<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media_product extends Model
{
    //
    public function media_Type(){
        return $this->belongsTo(Media_type::class);
    }
}
