@extends('admin.master')
@section('title')
    Edit Order
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Edit Order
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-order') }}">Manage order</a></li>
            <li class="active">Edit order</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">Edit Order Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <form name="editOrderForm" class="form-horizontal" action="{{url('/update-order')}}" method="POST">
                            <div class="box-body">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3"  class="col-sm-2 control-label">Order Status</label>
                                    <div class="col-sm-10">
                                        <select name="order_status" class="form-control">
                                            <option value="Success">Success full</option>
                                            <option value="Cancel">Cancel</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                        <input type="hidden" name="order_id" value="{{ $orderById->id }}" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3"  class="col-sm-2 control-label">Payment Status</label>
                                    <div class="col-sm-10">
                                        <select name="payment_status" class="form-control">
                                            <option value="Success">Success full</option>
                                            <option value="Cancel">Cancel</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-info pull-right">Update Order Info</button>
                            </div><!-- /.box-footer -->
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
    <script>
        document.forms['editOrderForm'].elements['order_status'].value = '{{ $orderById->order_status }}';
        document.forms['editOrderForm'].elements['payment_status'].value = '{{ $orderById->payment_status }}';
    </script>
@endsection