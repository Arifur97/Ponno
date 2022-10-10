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
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Order Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($allOrders as $order)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                    <td>TK. {{ $order->order_total }}</td>
                                    <td>{{ $order->order_status }}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td class="center">
                                        <a href="{{url('/view-order/'.$order->id)}}" class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in" title="View Order Details"></span>
                                        </a>
                                        <a href="{{url('/view-order-invoice/'.$order->id)}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-inbox" title="View Order Invoice"></span>
                                        </a>
                                        <a href="{{url('/download-order-invoice/'.$order->id)}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-download" title="Download Order Invoice"></span>
                                        </a>
                                        <a href="{{url('/edit-order/'.$order->id)}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-edit" title="Edit Order"></span>
                                        </a>
                                        <a href="{{url('/delete-order/'.$order->id)}}" class="btn btn-danger btn-xs">
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