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
                        <h4> Registration or Login From here and manage your shopping.</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-md-8 col-md-offset-2" style="padding-right: 0px;">
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink; margin-bottom: 10px;">
                        <div class="panel-heading" style="background-color: transparent; border-bottom: 1px solid deeppink; border-radius: 0px;">
                            <h4 class=" text-center" style="">Registration From Here</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom: 8px;">
                            <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                <form action="{{ url('/registration') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-md-4">First Name  <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text"  name="first_name" class="form-control" placeholder="First Name">
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
                                            <input type="text"  name="last_name" class="form-control" placeholder="Last Name">
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
                                            <input type="email"  id="emailAddress" name="email_address" class="form-control" onblur="customerEmailCheck(this.value); " placeholder="Email Address">
                                            <span id="res" class="text-danger"></span>
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
                                            <input type="password"  name="password" class="form-control" placeholder="Password">
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
                                            <input type="number"  name="mobile_number" class="form-control" placeholder="Mobile Number">
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
                                        <label class="control-label col-md-4">Image</label>
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
                                        <input type="submit" name="btn" id="submitBtn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Registration">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-md-8 col-md-offset-2" style="padding-right: 0px;">
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink; margin-bottom: 10px;">
                        <div class="panel-heading" style="background-color: transparent; border-bottom: 1px solid deeppink; border-radius: 0px;">
                            <h4 class=" text-center" style="">Login From Here</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom: 8px;">
                            <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                <form action="{{ url('/sign-in') }}" method="POST">
                                    {{ csrf_field() }}
                                    <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
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
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            @if($errors->has('password'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('password')}}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Login">
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
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
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