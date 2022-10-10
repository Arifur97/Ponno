@extends('admin.master')
@section('title')
    Update About
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Update About Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-about') }}">Manage About</a></li>
            <li class="active">Add About</li>
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
                    <form class="form-horizontal" action="{{url('/update-about')}}" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{$about->title}}" class="form-control" id="inputEmail3" placeholder="Title">
                                    <input type="hidden" name="aboutId" value="{{$about->id}}" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" type="file" id="inputEmail3" accept="image/*">
                                    <img src="{{asset($about->image)}}" width="50" height="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Mission </label>
                                <div class="col-sm-10">
                                    <textarea name="mission" class="form-control">{{$about->mission}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Vision </label>
                                <div class="col-sm-10">
                                    <textarea name="vision" class="form-control">{{$about->vision}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Goal</label>
                                <div class="col-sm-10">
                                    <textarea name="goal" class="form-control">{{$about->goal}}</textarea>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Update About Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
@endsection