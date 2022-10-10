@extends('admin.master')
@section('title')
    Add User
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create User Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-user') }}">Manage User</a></li>
            <li class="active">Add User</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{url('/new-user')}}" method="POST">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                                    <span style="color: red;">{{ $errors->has('name') ? $errors->first('name') : ' '}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Email-Address</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email-Address">
                                    <span style="color: red;">{{ $errors->has('email') ? $errors->first('email') : ' '}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"  class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    <span style="color: red;">{{ $errors->has('password') ? $errors->first('password') : ' '}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="phone_number" class="form-control" id="inputEmail3" placeholder="Phone Number">
                                    <span style="color: red;">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' '}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control"></textarea>
                                    <span style="color: red;">{{ $errors->has('address') ? $errors->first('address') : ' '}}</span>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Create User Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
@endsection