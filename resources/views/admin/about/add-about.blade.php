@extends('admin.master')
@section('title')
    Add About
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create About Form
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
                    <form class="form-horizontal" action="{{url('/new-about')}}" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
                                    @if($errors->has('title'))
                                        <span style="color: deeppink;">
                                                {{$errors->first('title')}}
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" type="file" id="inputEmail3" accept="image/*">
                                    @if($errors->has('image'))
                                        <span style="color: deeppink;">
                                                {{$errors->first('image')}}
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Mission </label>
                                <div class="col-sm-10">
                                    <textarea name="mission" class="form-control"></textarea>
                                    @if($errors->has('mission'))
                                        <span style="color: deeppink;">
                                                {{$errors->first('mission')}}
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Vision </label>
                                <div class="col-sm-10">
                                    <textarea name="vision" class="form-control"></textarea>
                                    @if($errors->has('vision'))
                                        <span style="color: deeppink;">
                                                {{$errors->first('vision')}}
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Goal</label>
                                <div class="col-sm-10">
                                    <textarea name="goal" class="form-control"></textarea>
                                    @if($errors->has('goal'))
                                        <span style="color: deeppink;">
                                                {{$errors->first('goal')}}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Create About Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
@endsection