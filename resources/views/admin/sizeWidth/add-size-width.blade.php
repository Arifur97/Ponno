@extends('admin.master')
@section('title')
    Add Size Width
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create Size Width Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-size-width') }}">Manage Size Width</a></li>
            <li class="active">Add Size Width</li>
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
                    <form class="form-horizontal" action="{{url('/new-size-width')}}" method="POST">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Size Width Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="size_width_name" class="form-control" id="inputEmail3" placeholder="Size Width Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Size Width Description</label>
                                <div class="col-sm-10">
                                    <textarea name="size_width_description" class="form-control"></textarea>
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
                            <button type="submit" class="btn btn-info pull-right" onclick="return validate();">Create Size Width Info</button>
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