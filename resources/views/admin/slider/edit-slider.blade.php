@extends('admin.master')
@section('title')
    Slider Module
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Slider Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-slider') }}">Manage Slider</a></li>
            <li class="active">Edit Slider</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slider Form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" name="editSliderForm" action="{{ url('/update-slider') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <select name="sub_category_id" class="form-control">
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Slider Main Image</label>
                                <div class="col-sm-10">
                                    <input name="slider_main_image" type="file" accept="image/*">
                                    <img src="{{asset($slideById->slider_main_image)}}" height="50" width="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Slider Sub Image</label>
                                <div class="col-sm-10">
                                    <input type="hidden" value="{{$slideById->id}}" name="slider_id" class="form-control" id="inputEmail3">
                                    <input name="slider_sub_image" type="file" accept="image/*">
                                    <img src="{{asset($slideById->slider_sub_image)}}" height="50" width="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                                <div class="col-sm-10">
                                    <select name="publication_status" class="form-control">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Update Slider Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        document.forms['editSliderForm'].elements['publication_status'].value='{{$category->publication_status}}';
    </script>
@endsection