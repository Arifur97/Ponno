@extends('frontEnd.master')

@section('body')
    <section style="padding: 10px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                    <div class="row">
                        <h3 class="text-center" style="color: deeppink; margin-top: 0px;">My Order</h3>
                    </div>
                    <div class="row">
                        <table>
                            <tr>
                                <th>Order No</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_type }}</td>
                                <td>{{$order->payment_status }}</td>
                                <td class="text-center">
                                    <a href="{{url('/customer-order-view/'.$order->id)}}" class=" btn btn-primary btn-xs" style="background-color: deeppink;">
                                        <span class="fa fa-eye" title="View"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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