<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class OrderLine extends Model
{
    use Sortable;
    protected $sortable = ['id','product_id','order_id','price', 'quantity', 'description'];
    protected $fillable = ['price', 'quantity', 'description'];
    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
