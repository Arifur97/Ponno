@extends('admin.master')
@section('title')
    Manage Customer
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Brand
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-brand') }}">Add Brand</a></li>
            <li class="active">Manage Brand</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Customer Information</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Email Address</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>District Name</th>
                                <th>Date Of Birth</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allCustomers as $allCustomer)
                                <tr>
                                    <td>{{ $allCustomer->first_name.' '.$allCustomer->last_name }}</td>
                                    <td>{{ $allCustomer->email_address }}</td>
                                    <td>{{ $allCustomer->mobile_number }}</td>
                                    <td>{{ $allCustomer->address }}</td>
                                    <td>{{ $allCustomer->district_name }}</td>
                                    <td>{{ $allCustomer->date_of_birth }}</td>
                                    <td class="center">
                                        <a href="{{ url('/delete-customer/'.$allCustomer->id) }}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash" title="Delete" onclick="return confirm('Are You Sure Delete This');"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection