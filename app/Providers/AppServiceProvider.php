<?php

namespace App\Providers;
use App\Product;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\facades\schema;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //schema::defaultStringLength(191);
        View::composer('frontEnd.include.header', function ($view) {
            $view->with('subCategories', SubCategory::where('publication_status', 1)->get());
            $view->with('publishedProducts', Product::where('publication_status', 1)->orderBy('id', 'desc')->get());
        });

        View::composer('frontEnd.include.menu', function ($view) {
            /* Health & Beauty (hab) menu Item start */
            $view->with('habFirstSixSubCategories',
                    DB::table('sub_categories')->where('category_id', 1)->skip(0)->take(6)->get());
            $view->with('habSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 1)->skip(6)->take(6)->get());
            $view->with('habThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 1)->skip(12)->take(6)->get());
            $view->with('habFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 1)->skip(18)->take(6)->get());
            /* Health & Beauty (hab) menu Item end */

            /* clothing (clo) menu Item start */
            $view->with('cloFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 2)->skip(0)->take(6)->get());
            $view->with('cloSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 2)->skip(6)->take(6)->get());
            $view->with('cloThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 2)->skip(12)->take(6)->get());
            $view->with('cloFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 2)->skip(18)->take(6)->get());
            /* clothing (clo) menu Item end */

            /* Footwear (foo) menu Item start */
            $view->with('fooFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 3)->skip(0)->take(6)->get());
            $view->with('fooSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 3)->skip(6)->take(6)->get());
            $view->with('fooThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 3)->skip(12)->take(6)->get());
            $view->with('fooFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 3)->skip(18)->take(6)->get());
            /* clothing (foo) menu Item end */

            /* Jewelry (jew) menu Item start */
            $view->with('jewFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 4)->skip(0)->take(6)->get());
            $view->with('jewSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 4)->skip(6)->take(6)->get());
            $view->with('jewThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 4)->skip(12)->take(6)->get());
            $view->with('jewFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 4)->skip(18)->take(6)->get());
            /* Jewelry (jew) menu Item end */

            /* Life Style (lis) menu Item start */
            $view->with('lisFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 5)->skip(0)->take(6)->get());
            $view->with('lisSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 5)->skip(6)->take(6)->get());
            $view->with('lisThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 5)->skip(12)->take(6)->get());
            $view->with('lisFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 5)->skip(18)->take(6)->get());
            /* Life Style (lis) menu Item end */

            /* Islamic Collection (isc) menu Item start */
            $view->with('iscFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 6)->skip(0)->take(6)->get());
            $view->with('iscSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 6)->skip(6)->take(6)->get());
            $view->with('iscThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 6)->skip(12)->take(6)->get());
            $view->with('iscFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 6)->skip(18)->take(6)->get());
            /* Islamic Collection (isc) menu Item end */

            /* Gift Items  (gii) menu Item start */
            $view->with('giiFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 7)->skip(0)->take(6)->get());
            $view->with('giiSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 7)->skip(6)->take(6)->get());
            $view->with('giiThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 7)->skip(12)->take(6)->get());
            $view->with('giiFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 7)->skip(18)->take(6)->get());
            /* Gift Items  (gii menu Item end */

            /* Food Item  (foi) menu Item start */
            $view->with('foiFirstSixSubCategories',
                DB::table('sub_categories')->where('category_id', 8)->skip(0)->take(6)->get());
            $view->with('foiSecondSixSubCategories',
                DB::table('sub_categories')->where('category_id', 8)->skip(6)->take(6)->get());
            $view->with('foiThirdSixSubCategories',
                DB::table('sub_categories')->where('category_id', 8)->skip(12)->take(6)->get());
            $view->with('foiFourthSixSubCategories',
                DB::table('sub_categories')->where('category_id', 8)->skip(18)->take(6)->get());
            /* Food Item  (foi menu Item end */


            /* menu category */
            $view->with('healthAndBeauty', DB::table('categories')->where('id',1)->first());
            $view->with('clothing', DB::table('categories')->where('id',2)->first());
            $view->with('footwear', DB::table('categories')->where('id',3)->first());
            $view->with('jewelry', DB::table('categories')->where('id',4)->first());
            $view->with('lifestyle', DB::table('categories')->where('id',5)->first());
            $view->with('islamic', DB::table('categories')->where('id',6)->first());
            $view->with('giftItem', DB::table('categories')->where('id',7)->first());
            $view->with('footItem', DB::table('categories')->where('id',8)->first());
            /* menu category */
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
