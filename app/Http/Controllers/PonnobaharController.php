<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductSubImage;
use App\Slider;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Review;

class PonnobaharController extends Controller
{
    public function index() {
        $publishedSliders = Slider::where('publication_status', 1)->get();
        $carouselSliderProducts = Product::where('carousel_slider', 1)
                    ->orderBy('id', 'desc')
                    ->take(25)
                    ->get();
        $firstTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $secondTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(4)->take(4)->get();
        $thirdTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(8)->take(4)->get();
        $fourthTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(12)->take(4)->get();

        $topLeftOnes=DB::table('products')->where('top_left_one',1)->orderBy('id','desc')->get();
        $topLeftTwos=DB::table('products')->where('top_left_two',1)->orderBy('id','desc')->get();
        $topRightOnes=DB::table('products')->where('top_right_one',1)->orderBy('id','desc')->get();
        $topRightTwos=DB::table('products')->where('top_right_two',1)->orderBy('id','desc')->get();

        return view('frontEnd.home.home', [
                'publishedSliders'=>$publishedSliders,
                'carouselSliderProducts'=>$carouselSliderProducts,
                'firstTopProducts'=>$firstTopProducts,
                'secondTopProducts'=>$secondTopProducts,
                'thirdTopProducts'=>$thirdTopProducts,
                'fourthTopProducts'=>$fourthTopProducts,

                'topLeftOnes'=>$topLeftOnes,
                'topLeftTwos'=>$topLeftTwos,
                'topRightOnes'=>$topRightOnes,
                'topRightTwos'=>$topRightTwos,
            ]);
    }
    public function category($id) {

        $categoryProducts = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        return view('frontEnd.category.category', ['categoryProducts'=>$categoryProducts]);
    }

    private function getProductBy300Taka() {
        $productForTk300 =DB::table('products')->whereBetween('product_price', [0, 300])->get();
        return $productForTk300;
    }
    private function getProductBy1000Taka() {
        $productForTk1000 =DB::table('products')->whereBetween('product_price', [301, 1000])->get();
        return $productForTk1000;
    }
    private function getProductBy3000Taka() {
        $productForTk3000 =DB::table('products')->whereBetween('product_price', [1001, 3000])->get();
        return $productForTk3000;
    }
    private function getProductBy5000Taka() {
        $productForTk5000 =DB::table('products')->whereBetween('product_price', [3001, 5000])->get();
        return $productForTk5000;
    }
    private function getProductBy10000Taka() {
        $productForTk10000 =DB::table('products')->whereBetween('product_price', [5001, 10000])->get();
        return $productForTk10000;
    }
    private function getProductBy20000Taka() {
        $productForTk20000 =DB::table('products')->whereBetween('product_price', [10001, 20000])->get();
        return $productForTk20000;
    }
    private function getProductBy100000Taka() {
        $productForTk100000 =DB::table('products')->whereBetween('product_price', [20001, 100000])->get();
        return $productForTk100000;
    }
    public function categoryProduct($taka) {
        $productsByFilter='';
        switch ($taka) {
            case '300':
                $productsByFilter = $this->getProductBy300Taka();
                break;
            case '1000':
                $productsByFilter = $this->getProductBy1000Taka();
                break;
            case '3000':
                $productsByFilter = $this->getProductBy3000Taka();
                break;
            case '5000':
                $productsByFilter = $this->getProductBy5000Taka();
                break;
            case '10000':
                $productsByFilter = $this->getProductBy10000Taka();
                break;
            case '20000':
                $productsByFilter = $this->getProductBy20000Taka();
                break;
            case '100000':
                $productsByFilter = $this->getProductBy100000Taka();
                break;
        }
        return view('frontEnd.category.category-filter', ['productsByFilter'=>$productsByFilter]);
    }

    public function getProductByBlack() {
        $productByColor =DB::table('products')->where('product_color', 'Black')->get();
        return $productByColor;
    }
    public function getProductByWhite() {
        $productByColor =DB::table('products')->where('product_color', 'White')->get();
        return $productByColor;
    }
    public function getProductByOrange() {
        $productByColor =DB::table('products')->where('product_color', 'Orange')->get();
        return $productByColor;
    }
    public function getProductByPink() {
        $productByColor =DB::table('products')->where('product_color', 'Pink')->get();
        return $productByColor;
    }
    public function getProductByGolden() {
        $productByColor =DB::table('products')->where('product_color', 'Golden')->get();
        return $productByColor;
    }
    public function getProductByYellow() {
        $productByColor =DB::table('products')->where('product_color', 'Yellow')->get();
        return $productByColor;
    }
    public function getProductByBlue() {
        $productByColor =DB::table('products')->where('product_color', 'Blue')->get();
        return $productByColor;
    }
    public function getProductByPerple() {
        $productByColor =DB::table('products')->where('product_color', 'Perple')->get();
        return $productByColor;
    }
    public function getProductBySilver() {
        $productByColor =DB::table('products')->where('product_color', 'Silver')->get();
        return $productByColor;
    }
    public function getProductByRed() {
        $productByColor =DB::table('products')->where('product_color', 'Red')->get();
        return $productByColor;
    }
    public function getProductByGreen() {
        $productByColor =DB::table('products')->where('product_color', 'Green')->get();
        return $productByColor;
    }

    public function colorProduct($color) {
        $productsByFilter='';
        switch ($color) {
            case 'Black':
                $productsByFilter = $this->getProductByBlack();
                break;
            case 'White':
                $productsByFilter = $this->getProductByWhite();
                break;
            case 'Orange':
                $productsByFilter = $this->getProductByOrange();
                break;
            case 'Pink':
                $productsByFilter = $this->getProductByPink();
                break;
            case 'Golden':
                $productsByFilter = $this->getProductByGolden();
                break;
            case 'Yellow':
                $productsByFilter = $this->getProductByYellow();
                break;
            case 'Blue':
                $productsByFilter = $this->getProductByBlue();
                break;
            case 'Perple':
                $productsByFilter = $this->getProductByPerple();
                break;
            case 'Silver':
                $productsByFilter = $this->getProductBySilver();
                break;
            case 'Red':
                $productsByFilter = $this->getProductByRed();
                break;
            case 'Green':
                $productsByFilter = $this->getProductByGreen();
                break;
        }
        return view('frontEnd.category.category-filter', ['productsByFilter'=>$productsByFilter]);
    }


    public function productDetails($id) {
        $productImages = ProductSubImage::where('product_id', $id)->get();
        $productById = Product::find($id);
        $categoryProducts = Product::where('category_id', $productById->category_id)->orderBy('id', 'desc')->take(20)->get();
//        $reviews=DB::table('reviews')->where('publication_status',1)->orderBy('id','desc')->get();
        $reviews=DB::table('reviews')
            ->join('customers','reviews.customer_id','=','customers.id')
            ->select('reviews.*','customers.first_name','customers.last_name','customers.customer_image')
            ->where('reviews.publication_status',1)
            ->where('reviews.product_id',$id)
            ->get();
        //return $productById;
        $sizeWidths = DB::table('product_size_widths')
            ->join('size_widths','product_size_widths.size_width_id','=','size_widths.id')
            ->join('products','product_size_widths.product_id','=','products.id')
            ->select( 'size_widths.id', 'size_widths.size_width_name', 'product_size_widths.product_id')
            ->where('product_size_widths.product_id',$id)
            ->where('products.product_sku', '>', 0)
            ->get();
        return view('frontEnd.product.product-details', [
            'productImages'=>$productImages,
            'productById'=>$productById,
            'categoryProducts' =>$categoryProducts,
            'reviews'=>$reviews,
            'sizeWidths'=>$sizeWidths
        ]);
    }

    public function contact(){
        return view('frontEnd.footer.contact-us');
    }
    public function about(){
        return view('frontEnd.footer.about-us');
    }
    public function deliveryMethod(){
        return view('frontEnd.footer.delivery-method');
    }
    public function privacyPolicy(){
        return view('frontEnd.footer.privacy-policy');
    }
    public function paymentMethod(){
        return view('frontEnd.footer.payment-method');
    }
    public function FAQ() {
        return view('frontEnd.footer.faq');
    }
    public function searchProduct(Request $request) {
        if($request->sub_category_id == 'Select A Category' && $request->search_content == null) {
            $message = 'Please select a valid category name & product name';
            return view('frontEnd.search.search-content', ['message'=>$message]);

        }

        if($request->sub_category_id != 'Select A Category' && $request->search_content == null) {
            $searchResults = DB::table('products')
                ->where('sub_category_id',$request->sub_category_id)
                ->orderBy('id', 'desc')
                ->get();
            return view('frontEnd.search.search-content', ['searchResults'=>$searchResults]);

        }

        if($request->sub_category_id == 'Select A Category' && $request->search_content != null) {
            $searchResults = DB::table('products')
                ->where('product_name','LIKE','%'.$request->search_content.'%')
                ->orderBy('id', 'desc')
                ->get();
            return view('frontEnd.search.search-content', ['searchResults'=>$searchResults]);

        }

        $searchResults = DB::table('products')
            ->where('product_name','LIKE','%'.$request->search_content.'%')
            ->where('sub_category_id', $request->sub_category_id)
            ->orderBy('id', 'desc')
            ->get();
        return view('frontEnd.search.search-content', ['searchResults'=>$searchResults]);

    }

    public function getProductByCategoryId($id) {
        $products = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        if($products->isNotEmpty()) {
        echo view('frontEnd.search.ajax-search', ['products' => $products]);
        } else {
            echo view('frontEnd.search.empty-ajax-search');
        }
    }

    public function brandProductView($brandId){
//        $brandProducts=DB::table('brands')
//            ->join('products','brands.id','=','products.brand_id')
//            ->where('brands.id',$brandId)
//            ->get();
//        return $brand;
        $brandProducts = Product::where('brand_id', $brandId)->get();
        return view('frontEnd.category.brand-info',['brandProducts'=>$brandProducts]);
    }

}
