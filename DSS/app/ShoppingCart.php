<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function carts() {
        return $this->belongsToMany('App\Products');
    }
}
