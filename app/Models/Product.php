<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $guarded = [];

    const IMAGE_PATH = 'images/product/';

    public function type()
    {
        return $this->belongsTo(Category::class, 'product_type_id', 'id');
    }
}
