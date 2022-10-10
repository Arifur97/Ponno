@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create Category Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-category') }}">Manage Category</a></li>
            <li class="active">Add Category</li>
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
                    <form class="form-horizontal" action="{{url('/new-category')}}" method="POST">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="category_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                                <div class="col-sm-10">
                                    <select name="publication_status" id="selection" class="form-control">
                                        <option value="Select Option">Select Option</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                    <p style="color: deeppink" id="message"></p>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="button" class="btn btn-info pull-right" onclick="return validate();">Create Category Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <script>
        function validate() {
            var select = document.getElementById('selection').value;
            var message = document.getElementById('message')
            if (select=="Select Option"){
                message.innerHTML='Please select Publication Status ';
                return false;
            }else {
                return true;
            }
        }
    </script>
@endsection