@extends('frontEnd.master')

@section('body')
    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height: 15px;"></div>
                </div>
                <div class="col-sm-12">
                    <div class="well well-sm text-center" style="background-color: transparent; border: 1px solid deeppink; border-radius: 0px; margin-bottom: 10px;">
                        <h4>Hello <b>{{ Session::get('customerName') }}. </b> Welcome to product delivery process. Please give us the proper information to complete your valuable order. Thanks.</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-sm-12">
                    <div class="well well-sm text-center" style="background-color: transparent; border: 1px solid deeppink; border-radius: 0px; margin-bottom: 10px;">

                        <h4>Please select your required delivery option</h4>
                        <hr/>
                        <ul class="nav nav-pills nav-justified" style="border: 1px solid deeppink;">
                            <li class="active"><a data-toggle="pill" href="#home">Home Delivery</a></li>
                            <li><a data-toggle="pill" href="#menu1">Pick up my office</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="panel-body" style="padding-bottom: 0px;">
                                    <ul style="padding-left: 13px; list-style-type: none;">
                                        <li style="margin-bottom: 5px; text-align: center;">Our home delivery charge inside Dhaka is : 60 taka (max 2 kg)</li>
                                        <li style="margin-bottom: 5px; text-align: center;">Our home delivery charge outside Dhaka is : 100 taka (max 1 kg)</li>
                                        <li style="margin-bottom: 5px; text-align: center;">If you come personally at our office to collect products, it will not take any charge.</li>
                                        <li style="margin-bottom: 5px; text-align: center;">Here, good news for customer is, in case of some selected area and selected products, same day delivery is possible.</li>
                                        <li style="text-align: center;">You can buy from anywhere in Bangladesh, but ponnobahar.com does not deliver outside Bangladesh.</li>
                                        <li style="text-align: center;">We deliver product all over the Bangladesh according to client’s demand. Delivery time depends on product availability and distance of delivery. </li>
                                    </ul>
                                    <p style="text-align: center; color: black;">
                                        If your address inside of Dhaka city, we can deliver products within 2 business days (Saturday to Thursday). But if it outside of Dhaka city, it may take time for 2-4 business days. You will have to order us before 6 pm . But, if you order after 6 pm, it will be taken as next business day.
                                    </p>
                                    <hr/>
                                    <h4>If your registration information & product delivery information are same then just press on Save Product Delivery Info & Continue Button.</h4>
                                    <hr/>
                                    <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                        <form action="{{ url('/new-shipping') }}" method="POST" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Full Name  <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <input type="text" name="full_name" value="{{ $customerById->first_name.' '.$customerById->last_name }}" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Mobile No <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <input type="number" name="mobile_number" value="{{ $customerById->mobile_number }}" class="form-control" placeholder="Mobile Number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Address</label>
                                                <div class="col-md-8">
                                                    <textarea required name="address" class="form-control" style="resize: vertical;" rows="5">{{ $customerById->address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="btn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Save Product Delivery Info And Continue">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Welcome Form Pick up my office.....</h3>
                                <h3>Welcome Form Pick up my office.....</h3>
                                <h3>Welcome Form Pick up my office.....</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <h3 class="text-center" style="color: deeppink; margin-top: 0px;">Product You may Buy</h3>
                <hr style="background-color: deeppink;"/>
            </div>
            <div class="row">
                @foreach($recentProducts as $recentProduct)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                        <div class="col-sm-6 category-product-item text-left" style="">
                            <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                        </div>
                        <div class="col-sm-6 category-product-item text-right" style="">
                            <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                        </div>

                        <a href="{{ url('/product-details/'.$recentProduct->id) }}"><img src="{{ asset($recentProduct->product_image) }}" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                        <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                            <p class="text-center" style="">{{ $recentProduct->product_name }}</p>
                            <hr style="background-color: deeppink; margin-top: -8px;"/>
                        </div>
                        <div class="col-sm-6" style="padding: 0px;">
                            <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                        </div>
                        <div class="col-sm-6" style=" padding: 0px;">
                            <a href="{{ url('/product-details/'.$recentProduct->id) }}" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                            <p style="padding-top: 0px;">TK. {{ $recentProduct->product_price }}</p>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                            <p style="padding-top: 0px; color: red;">{{ $recentProduct->discount_product_amount }}% Off</p>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                            <p style="padding-top: 0px;">TK. {{ $recentProduct->discount_product_price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection