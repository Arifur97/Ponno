@extends('admin.master')
@section('title')
    Manage Order
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Order
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-order') }}">Manage order</a></li>
            <li class="active">Manage order</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All Order Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>product_quantity </th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($nowOrders as $nowOrder)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $nowOrder->id }}</td>
                                    <td>{{ $nowOrder-> product_id}}</td>
                                    <td>{{ $nowOrder->product_name }}</td>
                                    <td>{{ $nowOrder->billing_name }}</td>
                                    <td>{{ $nowOrder->billing_email}}</td>
                                    <td>{{ $nowOrder->billing_mobile}}</td>
                                    <td>{{ $nowOrder->billing_address}}</td>
                                    <td>{{ $nowOrder->payment_method}}</td>
                                    <td class="center">
                                        <a href="{{url('/delete-order/'.$nowOrder->id)}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash" title="Delete Order" onclick="return confirm('Are You Sure Delete This');"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection