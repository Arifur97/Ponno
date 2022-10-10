@extends('frontEnd.master')

@section('body')
    <section style="padding: 20px 0px;">
        <div class="container">
            <div class="row">
                <h3 class="text-center" style="color: deeppink; margin-top: 0px;">My Profile</h3>
                <hr style="background-color: deeppink;"/>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                    <div class="row">
                        @foreach($customers as $customer)
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="border: 0px solid deeppink;">
                            <div class="img-responsive" style="float: left; height: 250px; width: 250px; ">
                                @if($customer->customer_image)
                                <img src="{{$customer->customer_image}}" alt="" height="100%" width="100%">
                                @else
                                <img src="http://img.freepik.com/free-icon/business-person-silhouette-wearing-tie_318-49988.jpg?size=338&ext=jpg" alt="" height="100%" width="100%">
                                @endif
                            </div>
                            <div class="" style="float: left; padding: 20px">
                                <a href="{{url('/edit-customer/'.$customer->id)}}"><input type="button" name="btn" value="Edit" style="padding: 5px; font-size: 18px; float: right; background-color: deeppink; color: white;"></a>
                                <div class="panel-heading panel-title" style="background-color: deeppink; color: white; height: 40px;">
                                    <h4 style="margin-top: -2px;">Hello & Welcome</h4>
                            </div>
                                <div class="row">
                                    <h2 style="color: deeppink; margin-top: 5px; margin-left: 13px;">{{$customer->first_name.' '.$customer->last_name}}</h2>
                                    <hr>
                                </div>
                                <table style="border: 0px solid;">
                                    <tr style="border: 0px hidden;">
                                        <td style="border: 0px hidden;"><strong>Phone</strong></td>
                                        <td>{{$customer->mobile_number}}</td>
                                    </tr>
                                    <tr style="border: hidden;">
                                        <td style="border: 0px hidden;"><strong>Email</strong></td>
                                        <td>{{$customer->email_address}}</td>
                                    </tr>
                                    <tr style="border: 0px hidden;">
                                        <td style="border: 0px hidden;"><strong>Country</strong></td>
                                        <td>{{$customer->country_name}}</td>
                                    </tr>
                                    <tr style="border: 0px hidden;">
                                        <td style="border: 0px hidden;"><strong>Address</strong></td>
                                        <td>{{$customer->address}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                            @endforeach
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4" style="padding-top: 36px;>
                    @include('frontEnd.customer.customer-menu.menu')
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: white; padding: 25px">
        <div class="container">
            <div class="row">
                <h3 class="text-center" style="color: deeppink; margin-top: 0px;">My Favorite Product</h3>
                <hr style="background-color: deeppink;"/>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href=""><img src="{{ asset('/front/') }}/img/product.jpg" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style="">Product Name</p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="product-details.html" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;">20% Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href=""><img src="{{ asset('/front/') }}/img/product.jpg" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style="">Product Name</p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="product-details.html" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;">20% Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href=""><img src="{{ asset('/front/') }}/img/product.jpg" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style="">Product Name</p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="product-details.html" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;">20% Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href=""><img src="{{ asset('/front/') }}/img/product.jpg" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style="">Product Name</p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="product-details.html" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;">20% Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. 2700</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection