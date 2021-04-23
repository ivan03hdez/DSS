<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ShoppingCart extends Model
{
    use Sortable;
    protected $sortable = ['id','total','user_id'];
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
