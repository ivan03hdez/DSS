<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function lines() {
        return $this->hasMany('App\OrderLine');
    }
    public function carts() {
        return $this->belongsToMany('App\ShoppingCart');
    }
    public function favLists() {
        return $this->belongsToMany('App\FavoriteList');
    }
    public function promotion() {
        return $this->belongsTo('App\Promotion');
    }
       
}
