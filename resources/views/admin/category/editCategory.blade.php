@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('body')

    <section class="content-header">
        <h1>
            Update Category Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-category') }}">Manage Category</a></li>
            <li class="active">Edit Category</li>
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
                    <form name="editCategoryForm" class="form-horizontal" action="{{url('/update-category')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Name">
                                    <input type="hidden" value="{{$category->id}}" name="id" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="category_description" class="form-control">{{$category->category_description}}</textarea>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Update Category Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value='{{$category->publication_status}}'
    </script>
@endsection