<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'stock',
        'price', 'promotionPrice', 'status', 'featured',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'stock'  =>  'integer',
        'status'    =>  'boolean',
        'featured'  =>  'boolean'
    ];

     /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}