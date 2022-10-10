@extends('admin.master')
@section('title')
    Add Brand
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create Brand Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-brand') }}">Manage Brand</a></li>
            <li class="active">Add Brand</li>
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
                    <form class="form-horizontal" action="{{ url('/new-brand') }}" method="POST" name="form1">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Brand Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="brand_name" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Brand Description</label>
                                <div class="col-sm-10">
                                    <textarea name="brand_description" class="form-control"></textarea>
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
                            <button type="submit" class="btn btn-info pull-right" onclick="return validate();">Create Brand Info</button>
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