<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $fillable = ['price', 'quantity', 'description'];
    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
