@extends('frontEnd.master')

@section('og')
    <meta property="og:url"           content="http://localhost/ponnobahar/public/product-details/{{ $productById->id }}"/>
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Ponnobahar.com - {{ $productById->product_name }}" />
    <meta property="og:description"   content="{{ $productById->product_short_description }}" />
    <meta property="og:image"         content="{{ asset($productById->product_image) }}" />
@endsection

@section('body')
    <br/>
    {{--<h2 class="text-center" style="color: red;">{{Session::get('message')}}</h2>--}}
    @if($message = Session::get('message'))
        <div class="alert alert-info text-center" style="font-size: 20px; border-radius: 0px; background-color: deeppink; color: white;">
            {{ $message }}
        </div>
        <hr/>
    @endif

    <section class="sb-prod-det-img" style="background-color: white;">
        <div class="container" style="padding: 0px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            @foreach($productImages as $productImage)
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image img-responsive" src="{{ asset($productImage->product_sub_image) }}" alt="Image" />
                                    <img class="etalage_source_image img-responsive" src="{{ asset($productImage->product_sub_image) }}" title="" alt="Image" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sb-prod-info">
                        <h4><span style="color: deeppink;">Product Code: </span>{{ $productById->product_code }}</h4>
                        <h4><span style="color: deeppink;">Product Name: </span>{{ $productById->product_name }}</h4>
                        <h4><span style="color: deeppink;">Product Price: </span>TK. {{ $productById->product_price }}</h4>
                        <h4><span style="color: deeppink;">Made In Country: </span>{{ $productById->product_country }}</h4>
                        <h4><span style="color: deeppink;">Product Discount Amount: </span>{{ $productById->discount_product_amount }}</h4>
                        <h4><span style="color: deeppink;">Product Discount Price: </span>TK. {{ $productById->discount_product_price }}</h4>
                        <h4 style="color: deeppink;">Product Description : </h4>
                        <p class="text-justify" style="margin-bottom: 0px;">
                            {{ $productById->product_short_description }}
                        </p>
                        <form action="{{ url('/add-to-cart') }}" method="POST">
                            {{ csrf_field() }}
                            @if(!$sizeWidths->isEmpty())
                            <h4><span style="color: deeppink;">Product Size/Weight : </span>
                                <select name="size_width" onchange="checkProductStockBySizeWeight();">
                                    @foreach($sizeWidths as $sizeWidth)
                                        <option value="{{ $sizeWidth->size_width_name }}">{{ $sizeWidth->size_width_name }}</option>
                                    @endforeach
                                </select>
                            </h4>
                            @endif
                            <br/>
                            <div class="form-group">
                                <label>Qantity: </label>
                                <input type="number"  required name="product_quantity" min="1" max="200" value="1">   <a href="#reviews"><h4 class="pull-right">Be the first to review this product</h4></a>
                                <input type="hidden"  required name="product_id" value="{{ $productById->id }}">
                            </div>
                            <button type="submit" style="background-color: deeppink; margin-top: -10px; margin-left: 0px; " class="pull-right"><i class="fa fa-shopping-cart"></i> Add To Cart </button>
                            @if(!$sizeWidths->isEmpty())
                                <li style="list-style: none; " ><a href="{{url('/order-now/'.$productById->id)}}" style=" background: deeppink; color: white; padding: 10px;">Order Now</a></li>
                            @else
                                <li style="list-style-type: none; height: 20px;"></li>
                            @endif
                        </form>
                    </div>
                    <div class="sb-prod-cont">
                        <div style="padding: 20px 0px; font-size: 18px;">
                            <span> Order By Phone Please Dial : </span>
                            <span> <b> 01712 95 13 24 </b></span>
                        </div>
                    </div>
                    <div class="sb-prod-cont" style="margin-top: 5px;">
                        <div style="padding: 10px 0px; font-size: 18px;">
                            <span>Share With </span>
{{--                            @php($url = url('/product-details/'.$productById->id))--}}
{{--                            <a href="javascript:void(0)" onclick="fbShare('{{ $url }}', '{{ $productById->product_name }}')">Facebook</a>--}}
                            <div class="fb-share-button" data-href="http://localhost/ponnobahar/public/product-details/57" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fponnobahar%2Fpublic%2Fproduct-details%2F57&amp;src=sdkpreparse">Share</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding-top: 20px; background-color: white;" id="reviews">
        <div class="container" style="padding: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div style="border: 1px solid deeppink;">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active" style="border-right: 1px solid pink;"><a data-toggle="pill" href="#review">Review</a></li>
                            <li style="border-right: 1px solid pink;"><a data-toggle="pill" href="#conditions">Conditions</a></li>
                            <li style="border-right: 1px solid pink;"><a data-toggle="pill" href="#purahage">Purchage Steps</a></li>
                            <li style="border-right: 1px solid pink;"><a data-toggle="pill" href="#return">Return Policy</a></li>
                            <li style="border-right: 1px solid pink;"><a data-toggle="pill" href="#size">Size Guide</a></li>
                        </ul>
                        <div class="tab-content" style="border-top: 1px solid deeppink; padding: 10px;">
                            <div id="review" class="tab-pane fade in active">
                                @if(!$reviews->isEmpty())
                                    @foreach($reviews as $review)
                                    <div class="media">
                                        <div style="float: left;" class="media-left">
                                            @if($review->customer_image)
                                            <img src="{{ asset($review->customer_image) }}" class="media-object" style="width:60px">
                                            @else
                                            <img src="http://img.freepik.com/free-icon/business-person-silhouette-wearing-tie_318-49988.jpg?size=338&ext=jpg" class="media-object" style="width:60px">
                                            @endif
                                        </div>
                                        <div style="float: left; padding-bottom: 20px; margin-left: 10px;" class="media-body">
                                            <h4 class="media-heading"><u>Name :</u> {{$review->first_name.' '.$review->last_name}}</h4>
                                            <p> <u>Comments :</u> {{$review->review_product}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <h3>No Review Avaliable </h3>
                                    <hr/>
                                @endif
                                @if($customerId = Session::get('customerId'))
                                    <form action="{{url('/add-review')}}" method="POST">
                                        {{ csrf_field() }}
                                        <h4 class="text-center text-success">Review This Product:</h4>
                                        <hr/>
                                        <div class="form-group">
                                            <input type="hidden"  required name="product_id" value="{{ $productById->id }}">
                                            <input type="hidden"  required name="customer_id" value="{{ $customerId }}">
                                            <textarea name="review_product" class="form-control" required rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" name="btn" value="Save Review" style="font-size: 20px; border-radius: 0px; background-color: deeppink; color: white;">
                                        </div>
                                    </form>
                                @else
                                <p>To add review need to <a href="{{ url('/sign-in') }}">login</a> or <a href="{{ url('/registration') }}">Sign Up</a></p>
                                @endif
                            </div>
                            <div id="conditions" class="tab-pane fade">
                                <h3>Conditions Content goes here. Conditions Content goes here.</h3>
                                <h3>Conditions Content goes here. Conditions Content goes here.</h3>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                            </div>
                            <div id="purahage" class="tab-pane fade">
                                <h3>Purchage content goes here. Purchage content goes here.</h3>
                                <h3>Purchage content goes here. Purchage content goes here.</h3>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                            </div>
                            <div id="return" class="tab-pane fade">
                                <h3>Return content goes here. Return content goes here.</h3>
                                <h3>Return content goes here. Return content goes here.</h3>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                            </div>
                            <div id="size" class="tab-pane fade">
                                <h3>Size content goes here. Size content goes here.</h3>
                                <h3>Size content goes here. Size content goes here.</h3>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
                                <p>Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content. Some content.</p>
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
                <h3 class="text-center" style="color: deeppink;">Releted Product</h3>
                <hr style="background-color: deeppink;"/>
            </div>
            <div class="row">
                @foreach($categoryProducts as $categoryProduct)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">
                            <?php if ($categoryProduct->product_sku>=1){echo 'Available';}
                            else if ($categoryProduct->product_sku==0){echo 'Sold Out';}?></a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href="{{ url('/product-details/'.$categoryProduct->id) }}"><img src="{{ asset($categoryProduct->product_image) }}" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style="">{{ $categoryProduct->product_name }}</p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="{{ url('/product-details/'.$categoryProduct->id) }}" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. {{ $categoryProduct->product_price }}</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;">{{ $categoryProduct->discount_product_amount }}% Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK.{{ $categoryProduct->discount_product_price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection