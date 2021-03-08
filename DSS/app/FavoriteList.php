<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteList extends Model
{
    public function products() {
        return $this->belongsToMany('App\Products');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
