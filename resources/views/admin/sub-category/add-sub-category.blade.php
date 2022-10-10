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
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Create Sub Category Form</h3>
                        <hr/>
                        @if($message = Session::get('message'))
                            <div class="alert alert-info text-center">
                                {{ $message }}
                            </div>
                            <hr/>
                        @endif
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ url('/new-sub-category') }}" method="POST">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($allCategories as $allCategory)
                                        <option value="Select Option">Select Option</option>
                                        <option value="{{ $allCategory->id }}">{{ $allCategory->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <p style="color: deeppink" id="message1"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_category_name" required class="form-control" id="inputEmail3" placeholder="Sub Category Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="sub_category_description" class="form-control"></textarea>
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
                            <button type="submit" class="btn btn-info pull-right" onclick="return validate();">Create Sub Category Info</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div><!-- /.row -->
    </section>
    <script>
        function validate() {
            var select = document.getElementById('selection').value;
            var select1 = document.getElementById('category_id').value;
            var message = document.getElementById('message');
            var message1 = document.getElementById('message1');
            if (select == "Select Option" && select1 == "Select Option"){
                message.innerHTML ='Please select Publication Status ';
                message1.innerHTML ='Please select category name';
                return false;
            }else {
                return true;
            }
        }
    </script>
@endsection