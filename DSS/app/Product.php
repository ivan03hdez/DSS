<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'promotionPrice','color','model','stock','description','image'];

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
