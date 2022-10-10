<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NowOrder extends Model
{
    protected $fillable = [
        'product_id','product_name','product_quantity','billing_name', 'billing_email', 'billing_mobile','billing_address','sipping_name','sipping_email','sipping_mobile','sipping_address','payment_method',
    ];
}
