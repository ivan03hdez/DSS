<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class FavoriteList extends Model
{
    use Sortable;
    public $sortable = ['name','description','id','user_id'];
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
