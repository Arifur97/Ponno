@extends('admin.master')
@section('title')
    Manage About
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage About
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-about') }}">Add About</a></li>
            <li class="active">Manage About</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All About Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Mission</th>
                                <th>Vision</th>
                                <th>Goal</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{$about->id}}</td>
                                    <td>{{$about->title}}</td>
                                    <td><img src="{{$about->image}}" height="50" width="50"></td>
                                    <td>{{$about->mission}}</td>
                                    <td>{{$about->vision}}</td>
                                    <td>{{$about->goal}}</td>
                                    <td class="text-center">
                                    <a href="{{url('/edit-about/'.$about->id)}}" class="btn btn-success btn-xs">
                                    <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                    </a>
                                    <a href="{{url('/delete-about/'.$about->id)}}" class="btn btn-danger btn-xs">
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