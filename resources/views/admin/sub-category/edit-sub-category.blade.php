@extends('admin.master')
@section('title')
    Add Sub Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create Sub Category Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-sub-category') }}">Manage Sub Category</a></li>
            <li class="active">Add Sub Category</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Sub Category Form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ url('/update-sub-category') }}" method="POST" name="editSubCategoryForm">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_category_name" value="{{$subCategory->sub_category_name}}" class="form-control" id="inputEmail3" placeholder="Category Name">
                                    <input type="hidden" name="sub_category_id" value="{{$subCategory->id}}" class="form-control" id="inputEmail3" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="sub_category_description" class="form-control"> {{$subCategory->sub_category_description}}</textarea>
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
                            <button type="submit" class="btn btn-info pull-right">Update Sub Category Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        document.forms['editSubCategoryForm'].elements['publication_status'].value='{{$subCategory->publication_status}}'
    </script>
@endsection