<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['total'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function carts() {
        return $this->belongsToMany('App\Product');
    }
}
