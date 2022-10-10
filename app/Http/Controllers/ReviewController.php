<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
use App\Customer;
use DB;
use Session;

class ReviewController extends Controller
{
    public function addReview(Request $request){
        $review= new Review();
        $review->product_id=$request->product_id;
        $review->customer_id=$request->customer_id;
        $review->review_product=$request->review_product;
        $review->save();

        return redirect('/product-details/'.$request->product_id)->with('message', 'Your review successfully post. After approve, it will be shown. Thanks for you review.');

    }
    public function manageReview(){
        $reviews=DB::table('reviews')
            ->join('products','reviews.product_id','=','products.id')
            ->join('customers','reviews.customer_id','=','customers.id')
            ->select('reviews.*','products.product_name','customers.first_name','customers.last_name')
            ->get();
        return view('admin.review.manage-review',['reviews'=>$reviews]);
    }

    public function unpublishedReview($id){
        $review= Review::find($id);
        $review->publication_status = 0;
        $review->save();
        return redirect ('/manage-review')->with('message','Review Info Unpublished Successfully');
    }
    public function publishedReview($id){
        $review= Review::find($id);
        $review->publication_status = 1;
        $review->save();
        return redirect ('/manage-review')->with('message','Review Info published Successfully');
    }
    public function deleteReview($id){
        $review=Review::find($id);
        $review->delete();
        return redirect ('/manage-review')->with('message','Review Info Delete Successfully');
    }
}
