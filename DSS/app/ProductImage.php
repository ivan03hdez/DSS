<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    /**
     * @var string
     */
    protected $table = 'product_images';

    /**
     * @var array
     */
    protected $fillable = ['id', 'thumbnail', 'full'];

    /**
     * @var array
     */
    protected $casts = [
        'id'    =>  'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
