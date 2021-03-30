<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    use Sortable;
    protected $sortable = ['id','totalPrice','user_id'];
    protected $fillable = ['totalPrice'];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function lines() {
        return $this->hasMany('App\OrderLine');
    }
    public function numberOfLines($id){
        $count = OrderLine::where('order_id',$id)->get('id')->count();
        return $count;
    }
}
