<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function directAddToCart($id) {
        $productById=Product::where('id', $id)->first();
        if ($productById->product_sku >0) {
            Cart::add([
                'id' => $id,
                'name' => $productById->product_name,
                'price' => $productById->discount_product_price,
                'qty' => 1,
                'options' => [
                    'code' => $productById->product_code,
                    'image' => $productById->product_image,
                    'size_width' => 'N/A'
                ]
            ]);
            return redirect('/show-cart');
        } else {
            return redirect('/product-details/'.$id)->with('message','Sorry !!. This product not available in stock');
        }
    }


    public function addToCart(Request $request) {
        $productId=$request->product_id;
        $productById=Product::where('id', $productId)->first();
        if ($productById->product_sku >0) {
            Cart::add([
                'id' => $productId,
                'name' => $productById->product_name,
                'price' => $productById->discount_product_price,
                'qty' => $request->product_quantity,
                'options' => [
                    'code' => $productById->product_code,
                    'image' => $productById->product_image,
                    'size_width' => $request->size_width
                ]
            ]);
            return redirect('/show-cart');
        } else {
            return redirect('/product-details/'.$productId)->with('message','Sorry !!. This product not available in stock');
        }
    }

    public function showCart() {
        $cartProducts=Cart::content();
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.cart.cart', [
            'cartProducts'=>$cartProducts,
            'recentProducts' => $recentProducts
        ]);
    }
    public function updateCartProduct(Request $request, $id) {
        Cart::update($id, $request->qty);
        return redirect('/show-cart')->with('meassage', 'Cart Product info delete successfully');
    }
    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect('/show-cart')->with('meassage', 'Cart Product info delete successfully');
    }
//    public function ajaxUpdateCartProduct($productQuantity, $rowId) {
//        Cart::update($rowId, $productQuantity);
//    }
}
