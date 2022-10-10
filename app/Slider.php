<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'category_id', 'sub_category_id','slider_main_image','slider_sub_image','publication_status',
    ];
}
