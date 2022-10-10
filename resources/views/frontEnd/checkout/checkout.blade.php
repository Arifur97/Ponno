@extends('frontEnd.master')

@section('body')
    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height: 15px; background-color: lightgrey"></div>
                </div>
                <div class="col-sm-12">
                    <div class="well well-sm text-center" style="background-color: transparent; border: 1px solid deeppink; border-radius: 0px; margin-bottom: 10px;">
                        <h4>Welcome to checkout process. You have to login to complete your valuable order. If you are not registered then please register first. Thanks.</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-md-5" style="padding-right: 0px;">
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink; margin-bottom: 10px;">
                        <div class="panel-heading" style="background-color: transparent; border-bottom: 1px solid deeppink; border-radius: 0px;">
                            <h4 class=" text-center" style="">Login From Here</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom: 8px;">
                            <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                <form action="{{ url('/customer-login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <h4 class="text-center">{{Session::get('message')}}</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <span class="input-group-addon" style="background-color: deeppink;">
                                            <span class="glyphicon glyphicon-envelope" style="color: white;"></span>
                                        </span>
                                            <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                                            @if($errors->has('email_address'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('email_address')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <span class="input-group-addon" style="background-color: deeppink;">
                                            <span class="glyphicon glyphicon-lock" style="color: white;"></span>
                                        </span>
                                            <input type="password"  name="password" class="form-control" placeholder="Password">
                                            @if($errors->has('password'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('password')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Login And Continue">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink;">
                        <div class="panel-body" style="padding-bottom: 10px;">
                            <h4 class="text-center">Delivery Method</h4>
                            <hr/>
                            <ul style="padding-left: 13px;">
                                <li style="margin-bottom: 5px; text-align: justify;">We are here to make your online shopping more amazing and also within short time by supporting many methods of payment.</li>
                                <li style="margin-bottom: 5px; text-align: justify;"><strong>Ponnobahar.com</strong> is dedicated to give the best quality assurance and always make sure the correct packages reach on time. </li>
                                <li style="margin-bottom: 5px; text-align: justify;">Our home delivery charge inside Dhaka is : 60 taka (max 2 kg)</li>
                                <li style="margin-bottom: 5px; text-align: justify;">Our home delivery charge outside Dhaka is : 100 taka (max 1 kg)</li>
                                <li style="margin-bottom: 5px; text-align: justify;">If you come personally at our office to collect products, it will not take any charge.</li>
                                <li style="margin-bottom: 5px; text-align: justify;">Here, good news for customer is, in case of some selected area and selected products, same day delivery is possible.</li>
                                <li style="text-align: justify;">You can buy from anywhere in Bangladesh, but ponnobahar.com does not deliver outside Bangladesh.</li><li style="text-align: justify;">We deliver product all over the Bangladesh according to client’s demand. Delivery time depends on product availability and distance of delivery. </li>
                            </ul>
                            <hr/>
                            <p style="text-align: justify; color: black;">
                                If your address inside of Dhaka city, we can deliver products within 2 business days (Saturday to Thursday). But if it outside of Dhaka city, it may take time for 2-4 business days. You will have to order us before 6 pm . But, if you order after 6 pm, it will be taken as next business day.
                            </p>
                            <ul style="padding-left: 13px;">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7" style="padding-left: 10px;">
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink;">
                        <div class="panel-heading" style="background-color: transparent; border-bottom: 1px solid deeppink; border-radius: 0px;">
                            <h4 class=" text-center" style="">Registration From Here</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom: 0px;">
                            <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                <form action="{{ url('/new-customer') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-md-4">First Name  <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                            @if($errors->has('first_name'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('first_name')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Last Name <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                            @if($errors->has('last_name'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('last_name')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Email Address <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="email" id="emailAddress" name="email_address"  class="form-control" onblur="customerEmailCheck(this.value);" placeholder="Email Address">
                                            <span id="ermailAddressStatus" class="text-danger"></span>
                                            @if($errors->has('email_address'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('email_address')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Password <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            @if($errors->has('password'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('password')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Mobile No <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="number" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                            @if($errors->has('mobile_number'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('mobile_number')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Date Of Birth </label>
                                        <div class="col-md-8">
                                            <input  type="text" name="date_of_birth" placeholder="Click To Show & Insert Date"  id="example1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Customer Image</label>
                                        <div class="col-md-8">
                                            <input  type="file" name="customer_image" id="example1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Address</label>
                                        <div class="col-md-8">
                                            <textarea name="address" class="form-control" style="resize: vertical;" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">National ID </label>
                                        <div class="col-md-8">
                                            <input type="number" name="national_id" class="form-control" placeholder="National ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">District Name </label>
                                        <div class="col-md-8">
                                            <input type="text" name="district_name" class="form-control" placeholder="District Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Country Name </label>
                                        <div class="col-md-8">
                                            <input type="text" name="country_name" class="form-control" placeholder="Country Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-3">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" id="submitBtn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Registration And Continue">
                                    </div>
                                </form>
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
                            <p style="padding-top: 0px; color: red;">20% Off</p>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                            <p style="padding-top: 0px;">TK. 2700</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        function customerEmailCheck(email) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/ponnobahar/public/customer-email-check/'+email;
            xmlHttp.open("GET", serverPage);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('ermailStatus').innerHTML = xmlHttp.responseText;
                    if(xmlHttp.responseText == 'Email Address Already Exist') {
                        document.getElementById('submitBtn').disabled = true;
                    } else {
                        document.getElementById('submitBtn').disabled = false;
                    }
                }
            }
            xmlHttp.send(null);
        }
    </script>

@endsection