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
                        <h4>Welcome to product payment process. Please give us the proper information to complete your valuable order. Thanks.</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-sm-12">
                    <div class="well well-sm text-center" style="background-color: transparent; border: 1px solid deeppink; border-radius: 0px; margin-bottom: 10px;">
                        <h4>Please select your required payment option</h4>
                        <hr/>
                        <form action="{{ url('/new-order') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <table>
                                        <tr>
                                            <td><input type="radio" name="payment_type" required value="Cash On Delivery" id="pcash"></td>
                                            <td>Cash On Delivery</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="Rocket" id="procket"></td>
                                            <td>Rocket</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="B-Kash" id="pbkash"></td>
                                            <td>B-Kash</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="Visa Card" id="pvisa"></td>
                                            <td>Visa Card</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="Master Card" id="pmaster"></td>
                                            <td>Master Card</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="Nexus Card" id="pnexus"></td>
                                            <td>Nexus Card</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="payment_type" value="American Express Card" id="pamerican"></td>
                                            <td>American Express Card</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <div class="panel panel-default" style=" border: none; box-shadow: none;">
                                        <div class="panel-body" style="padding-bottom: 50px; margin-top: 5px;">
                                            <div id="cash" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 80px; display: none;">
                                                <p style="text-align: center; font-size: 25px; color: deeppink;" >After receiving products you will give cash.</p>
                                            </div>
                                            <div id="rocket" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Please send you payment on this Roket / B-Kash no : </b>01712 95 13 25 </p>
                                                <p style="text-align: left; color: deeppink; padding-left: 2px;"><b>Mobile No: </b></p>
                                                <p style="text-align: left; color: deeppink; padding-left: 2px;"><b>Transfer ID No : </b></p>
                                            </div>
                                            <div id="bkash" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....bkash</b></p>
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....bkash</b></p>
                                            </div>
                                            <div id="visa" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....visa</b></p>
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....visa</b></p>
                                            </div>
                                            <div id="master" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....master</b></p>
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....master</b></p>
                                            </div>
                                            <div id="nexus" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....nexus</b></p>
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....nexus</b></p>
                                            </div>
                                            <div id="american" style="border: 1px solid deeppink; margin-top: 30px; height: 200px; padding-top: 55px; display: none;">
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here...american.</b></p>
                                                <p style="text-align: center; color: deeppink; font-size: 16px;"><b>Some Content Goes here....american</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" name="btn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Confirm Order">
                                </div>
                            </div>
                        </form>
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