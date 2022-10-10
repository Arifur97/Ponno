@extends('admin.master')
@section('title')
    Update Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Edit Brand Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-brand') }}">Manage Brand</a></li>
            <li class="active">Edit Brand</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Brand Form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form name="editBrandForm" class="form-horizontal" action="{{url('/update-brand')}}" method="POST">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Brand Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$brand->brand_name}}" name="brand_name" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                    <input type="hidden" value="{{$brand->id}}" name="id" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Brand Description</label>
                                <div class="col-sm-10">
                                    <textarea name="brand_description" class="form-control">{{$brand->brand_description}}</textarea>
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
                            <button type="submit" class="btn btn-info pull-right">Update Brand Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        document.forms['editBrandForm'].elements['publication_status'].value='{{$brand->publication_status}}'
    </script>
@endsection