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
}
