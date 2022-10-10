<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'brand_id', 'product_name','product_size_weight','product_color','product_sku','product_price','discount_product_amount','discount_product_price','productShort_description','productLong_description','product_image','publication_status',
    ];
}
