<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['totalPrice'];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function lineas() {
        return $this->hashMany('App\OrderLine');
    }
}
