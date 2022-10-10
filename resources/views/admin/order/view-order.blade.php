@extends('admin.master')
@section('title')
    Manage Order
@endsection
@section('body')
    <section class="content-header">
        <h1>
            View Order Details
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-order') }}">Manage order</a></li>
            <li class="active">View order</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <h4 class="text-center">Order info</h4>
                        <hr style="border: 1px solid deeppink;"/>
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Order ID</th>
                                <td>{{ $orderInfo->id }}</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <th>{{ $orderInfo->order_total }}</th>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <th>{{ $orderInfo->order_status }}</th>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <th>{{ $orderInfo->order_date }}</th>
                            </tr>
                        </table>
                        <h4 class="text-center">Order Payment info</h4>
                        <hr style="border: 1px solid deeppink;"/>
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Payment Type</th>
                                <td>{{ $orderPaymentInfo->payment_type }}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <th>{{ $orderPaymentInfo->payment_status }}</th>
                            </tr>
                        </table>
                        <h4 class="text-center">Order Product info</h4>
                        <hr style="border: 1px solid deeppink;"/>
                        <table id="example2" class="table table-bordered table-hover">
                            <tr class="success">
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @foreach($orderProductsInfo as $orderProductInfo)
                            <tr>
                                <td>{{ $orderProductInfo->product_id }}</td>
                                <td>{{ $orderProductInfo->product_name}}</td>
                                <td>{{ $orderProductInfo->product_code }}</td>
                                <td>TK. {{ $orderProductInfo->product_price }}</td>
                                <td>{{ $orderProductInfo->product_quantity }}</td>
                                <td>TK. {{ $orderProductInfo->product_price*$orderProductInfo->product_quantity }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <h4 class="text-center">Billing info</h4>
                        <hr style="border: 1px solid deeppink;"/>
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{ $orderCustomerInfo->first_name.' '.$orderCustomerInfo->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <th>{{ $orderCustomerInfo->email_address }}</th>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <th>{{ $orderCustomerInfo->mobile_number }}</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th>{{ $orderCustomerInfo->address }}</th>
                            </tr>
                            <tr>
                                <th>District Name</th>
                                <th>{{ $orderCustomerInfo->district_name }}</th>
                            </tr>
                        </table>
                        <h4 class="text-center">Shipping info</h4>
                        <hr style="border: 1px solid deeppink;"/>
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Person Name</th>
                                <td>{{ $orderShippingInfo->full_name }}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <th>{{ $orderShippingInfo->mobile_number }}</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th>{{ $orderShippingInfo->address }}</th>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection