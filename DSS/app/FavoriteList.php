<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['name','description'];

    public function products() {
        return $this->belongsToMany('App\Product');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
