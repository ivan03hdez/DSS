<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Promotion extends Model
{
    use Sortable;
    protected $sortable = ['id','discount','beginDate','endDate'];
    public function products() {
        return $this->hasMany('App\Product');
    }
}
