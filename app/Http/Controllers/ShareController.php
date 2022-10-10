<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function share($id) {
        $product = Product::find($id);
        return view('frontEnd.product.share', ['product'=>$product]);
    }
}
