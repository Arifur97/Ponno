@extends('admin.master')
@section('title')
    Edit Size Width
@endsection
@section('body')

    <section class="content-header">
        <h1>
            Edit Size Width Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-size-width') }}">Manage Size Width</a></li>
            <li class="active">Edit Size Width</li>
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
                    <form name="editSizeWidthForm" class="form-horizontal" action="{{url('/update-size-width')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Size Width Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$sizeWidths->size_width_name}}" name="size_width_name" class="form-control" id="inputEmail3" placeholder="Category Name">
                                    <input type="hidden" value="{{$sizeWidths->id}}" name="sizeWidthId" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Size Width Description</label>
                                <div class="col-sm-10">
                                    <textarea name="size_width_description" class="form-control">{{$sizeWidths->size_width_description}}</textarea>
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
                            <button type="submit" class="btn btn-info pull-right">Update Size Width Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        document.forms['editSizeWidthForm'].elements['publication_status'].value='{{$sizeWidths->publication_status}}'
    </script>
@endsection