<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/404","ErrorHandlerController@errorCode404");
Route::get("/405","ErrorHandlerController@errorCode405");


Route::get('/', 'PonnobaharController@index');
Route::get('/category/{id}', 'PonnobaharController@category');
Route::get('/category-product/{taka}', 'PonnobaharController@categoryProduct');
Route::get('/color-product/{color}', 'PonnobaharController@colorProduct');
Route::get('/product-details/{id}', 'PonnobaharController@productDetails');

Route::post('/search-product', 'PonnobaharController@searchProduct');
Route::get('/get-product-by-category-id/{id}', 'PonnobaharController@getProductByCategoryId');


Route::get('/share/{id}', 'ShareController@share');



Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/add-to-cart', 'ErrorController@showErrorInfo');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product/{id}', 'CartController@updateCartProduct');

//Route::get('/update-cart-product/{productQuantity}/{rowId}', 'CartController@ajaxUpdateCartProduct');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCartProduct');




Route::get('/checkout', 'CheckoutController@index');
Route::get('/customer-email-check/{email}', 'CheckoutController@customerEmailCheck');
Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');

Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');

Route::get('/payment-info', 'CheckoutController@showPaymentInfo');
Route::post('/new-order', 'CheckoutController@newOrderInfo');

Route::get('/complete-order', 'CheckoutController@completeOrderInfo');
/*direct order*/
Route::get('/order-now/{id}', 'CheckoutController@orderNow');
Route::post('/save-order', 'CheckoutController@saveOrder');
/*direct order*/

/*Review*/
Route::post('/add-review', 'ReviewController@addReview');
Route::get('/add-review', 'ErrorController@showErrorInfo');
Route::get('/manage-review', 'ReviewController@manageReview');
Route::get('/unpublished-review/{id}', 'ReviewController@unpublishedReview');
Route::get('/published-review/{id}', 'ReviewController@publishedReview');
Route::get('/delete-review/{id}', 'ReviewController@deleteReview');
/*Review*/



Route::get('/contact-us','PonnobaharController@contact');
Route::get('/about-us', 'PonnobaharController@about');
Route::get('/delivery-method', 'PonnobaharController@deliveryMethod');
Route::get('/privacy-policy', 'PonnobaharController@privacyPolicy');
Route::get('/payment-method', 'PonnobaharController@paymentMethod');
Route::get('/FAQ', 'PonnobaharController@FAQ');


/*customer login sign up profile*/
Route::get('/sign-in', 'SignInController@index');
Route::post('/sign-in', 'SignInController@customerLoginCheck');
Route::get('/registration', 'SignInController@customerRegistration');
Route::post('/registration', 'SignInController@newCustomer');
Route::get('/edit-customer/{id}', 'SignInController@editCustomer');
Route::post('/update-profile', 'SignInController@updateCustomer');
Route::get('/update-profile', 'ErrorController@showErrorInfo');
/*customer login sign up profile*/




/*Admin Order Manager*/
Route::get('/manage-order', 'OrderController@manageOrderInfo');
Route::get('/view-order/{id}', 'OrderController@viewOrderDetails');
Route::get('/view-order-invoice/{id}', 'OrderController@viewOrderInvoice');
Route::get('/download-order-invoice/{id}', 'OrderController@downloadOrderInvoice');
Route::get('/edit-order/{id}', 'OrderController@editOrder');
Route::post('/update-order', 'OrderController@updateOrder');
Route::get('/update-order', 'ErrorController@showErrorInfo');
Route::get('/delete-order/{id}', 'OrderController@deleteOrder');
/*direct order*/
Route::get('/view-direct-order', 'OrderController@viewOrder');
Route::get('/delete-order/{id}', 'OrderController@deleteCustomerOrder');
/*direct order*/

/*Admin Order Manager*/

/*Admin Customer Manager*/
Route::get('/manage-customer', 'CustomerController@manageOrder');
Route::get('/delete-customer/{id}', 'CustomerController@deleteOrder');
/*Admin Customer Manager*/

/* Customer Register */
Route::get('/customer-home', 'CustomerController@customerHome');
Route::get('/customer-order', 'CustomerController@customerOrder');
Route::get('/customer-wishlist', 'CustomerController@customerWishlist');
Route::get('/customer-profiles', 'CustomerController@customerProfile');
Route::get('/customer-order-view/{id}', 'CustomerController@customerOrderView');
/* Customer Register */

/*Admin User*/
Route::get('/add-user', 'UserController@AddUser');
Route::post('/new-user', 'UserController@saveUserInfo');
Route::get('/manage-user', 'UserController@manageUserInfo');
Route::get('/delete-user/{id}', 'UserController@deleteUserInfo');
/*Admin User*/





Route::post('/customer-login', 'LoginController@customerLogin');
Route::get('/customer-logout', 'LogoutController@customerLogout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/add-category','CategoryController@addCategory');
Route::post('/new-category','CategoryController@newCategory');
Route::get('/manage-category','CategoryController@manageCategory');
Route::get('/unpublished-category/{id}','CategoryController@unpublishedCategory');
Route::get('/published-category/{id}','CategoryController@publishedCategory');
Route::get('/edit-category/{id}','CategoryController@editCategory');
Route::post('/update-category','CategoryController@updateCategory');
Route::get('/delete-category/{id}','CategoryController@deleteCategory');


Route::get('/add-sub-category', 'SubCategoryController@addSubCategory');
Route::post('/new-sub-category', 'SubCategoryController@saveSubCategory');
Route::get('/manage-sub-category', 'SubCategoryController@manageSubCategory');
Route::get('/unpublished-sub-category/{id}', 'SubCategoryController@unpublishedSubCategory');
Route::get('/published-sub-category/{id}', 'SubCategoryController@publishedSubCategory');
Route::get('/edit-sub-category/{id}', 'SubCategoryController@editSubCategory');
Route::post('/update-sub-category', 'SubCategoryController@updateSubCategory');
Route::get('/delete-sub-category/{id}', 'SubCategoryController@deleteSubCategory');

Route::get('/add-brand','BrandController@addBrand');
Route::post('/new-brand','BrandController@newBrand');
Route::get('/manage-brand','BrandController@manageBrand');
Route::get('/unpublished-brand/{id}','BrandController@unpublishedBrand');
Route::get('/published-brand/{id}','BrandController@publishedBrand');
Route::get('/edit-brand/{id}','BrandController@editBrand');
Route::post('/update-brand','BrandController@updateBrand');
Route::get('/delete-category/{id}','BrandController@deleteBrand');


Route::get('/add-size-width','SizeWidthController@addSizeWidth');
Route::post('/new-size-width','SizeWidthController@saveSizeWidth');
Route::get('/manage-size-width','SizeWidthController@manageSizeWidth');
Route::get('/unpublished-size-width/{id}','SizeWidthController@unpublishedSizeWidth');
Route::get('/published-size-width/{id}','SizeWidthController@publishedSizeWidth');
Route::get('/edit-size-width/{id}','SizeWidthController@editSizeWidth');
Route::post('/update-size-width','SizeWidthController@updateSizeWidth');
Route::get('/delete-size-width/{id}','SizeWidthController@deleteSizeWidth');









/*FrontEdn Brand View*/
Route::get('/brand-product-view/{brand_id}','PonnobaharController@brandProductView');
/*FrontEdn Brand View*/


Route::get('/add-slider','SliderController@addSlider');
Route::get('/slider-sub-category/{id}','SliderController@sliderSubCategoryByCategoryId');
Route::post('/new-slider','SliderController@saveImageSlider');
Route::get('/manage-slider','SliderController@manageSlider');
Route::get('/unpublished-slider/{id}','SliderController@unpublishedSlider');
Route::get('/published-slider/{id}','SliderController@publishedSlider');
Route::get('/edit-slider/{id}','SliderController@editSlider');
Route::post('/update-slider','SliderController@updateSlider');
Route::get('/delete-slider/{id}','SliderController@deleteSlider');







Route::get('/add-product','ProductController@addProduct');
Route::get('/select-sub-category/{id}', 'ProductController@selectSubCategoryByCategoryId');
Route::post('/new-product','ProductController@saveProductInfo');
Route::get('/manage-product','ProductController@manageProduct');
Route::get('/view-product/{id}','ProductController@viewProductInfo');
Route::get('/unpublished-product/{id}','ProductController@unpublishedProductInfo');
Route::get('/published-product/{id}','ProductController@publishedProductInfo');
Route::get('/edit-product/{id}','ProductController@editProductInfo');
Route::post('/update-product','ProductController@updateProductInfo');
Route::get('/delete-product/{id}','ProductController@deleteProductInfo');


/*about Module*/
Route::get('/add-about', 'AboutController@addAbout');
Route::post('/new-about', 'AboutController@saveAbout');
Route::get('/manage-about', 'AboutController@manageAbout');
Route::get('/edit-about/{id}', 'AboutController@editAbout');
Route::post('/update-about', 'AboutController@updateAbout');
Route::get('/delete-about/{id}', 'AboutController@deleteAbout');

/* wish list*/

Route::get('/add-wishlist/{id}/{category_id}','WishlistController@addWishlist');

/* wish list*/