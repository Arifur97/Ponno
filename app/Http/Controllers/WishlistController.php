<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Product;
use OrderDetail;
use App\Wishlist;

class WishlistController extends Controller
{

    public function addWishlist($id,$category_id) {
        $customerId=Session::get('customerId');
        if ($customerId) {
            $checkCustomerId = Wishlist::where('product_id',$id)
                ->where('customer_id',$customerId)
                ->first();
            if ($checkCustomerId){
                return redirect('category/'.$category_id)->with('message','This product already add your wish list.');
            }else{
                $wishlist=new Wishlist();
                $wishlist->customer_id=$customerId;
                $wishlist->product_id=$id;
                $wishlist->save();
                return redirect('category/'.$category_id)->with('message','Great !! This product successfully add to your wish list. Thanks for stay with us.');
            }
        }else{
            return redirect('category/'.$category_id)->with('message','We are very sorry because we can not add this product to your wish list. To add product in wish list  need to register the Site.');
        }
    }




}
