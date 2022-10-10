<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeWidth extends Model
{
    protected $fillable = [
        'size_width_name', 'size_width_description', 'publication_status',
    ];
}
