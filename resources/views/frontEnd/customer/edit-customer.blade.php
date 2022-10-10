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
                        <h4> Update Registration From here and manage your shopping.</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-md-8 col-md-offset-2" style="padding-right: 0px;">
                    <div class="panel panel-default" style="border-radius: 0px; border: 1px solid deeppink; margin-bottom: 10px;">
                        <div class="panel-heading" style="background-color: transparent; border-bottom: 1px solid deeppink; border-radius: 0px;">
                            <h4 class=" text-center" style="">Update Registration From Here</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom: 8px;">
                            <div class="well" style="padding-bottom: 0px; background-color: lightpink">
                                <form action="{{url('/update-profile')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-md-4">First Name  <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text"  name="first_name" value="{{$signIn->first_name}}" class="form-control" placeholder="First Name">
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
                                            <input type="text"  name="last_name" value="{{$signIn->last_name}}" class="form-control" placeholder="Last Name">
                                            @if($errors->has('last_name'))
                                                <span style="color: deeppink;">
                                                {{$errors->first('last_name')}}
                                            </span>
                                            @endif
                                            <input type="hidden"  name="customerId" value="{{$signIn->id}}" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Email Address <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="email"  id="emailAddress" name="email_address" value="{{$signIn->email_address}}" class="form-control" onblur="customerEmailCheck(this.value); " placeholder="Email Address">
                                            <span id="res" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Password <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="password"  name="password" value="{{$signIn->password}}" class="form-control" placeholder="Password">
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
                                            <input type="number"  name="mobile_number" value="{{$signIn->mobile_number}}" class="form-control" placeholder="Mobile Number">
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
                                            <input  type="text" name="date_of_birth" value="{{$signIn->date_of_birth}}" placeholder="Click To Show & Insert Date"  id="example1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Image</label>
                                        <div class="col-md-8">
                                            <input  type="file" name="customer_image" value="{{$signIn->customer_image}}" id="example1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Address</label>
                                        <div class="col-md-8">
                                            <textarea name="address" class="form-control" style="resize: vertical;" rows="5">{{$signIn->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">National ID </label>
                                        <div class="col-md-8">
                                            <input type="number" name="national_id" value="{{$signIn->national_id}}" class="form-control" placeholder="National ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">District Name </label>
                                        <div class="col-md-8">
                                            <input type="text" name="district_name" value="{{$signIn->district_name}}" class="form-control" placeholder="District Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Country Name </label>
                                        <div class="col-md-8">
                                            <input type="text" name="country_name" value="{{$signIn->country_name}}" class="form-control" placeholder="Country Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" id="submitBtn" class="btn btn-default btn-block" style="background-color: deeppink; height: 40px; border-radius: 0px; color: white; font-size: 18px;" value="Update Registration">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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