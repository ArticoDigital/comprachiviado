<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Coupon extends Model
{
    //
    protected $guarded = [];
    public function promo(){
        return $this->belongsTo(Promo::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
