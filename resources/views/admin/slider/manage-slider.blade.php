@extends('admin.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Slider
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-slider') }}"> Add Slider </a></li>
            <li class="active">Manage Slider</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All Slider Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Slider Main Image</th>
                                <th>Slider Sub Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{$slider->category_name}}</td>
                                    <td>{{$slider->sub_category_name}}</td>
                                    <td><img src="{{$slider->slider_main_image}}" height="50" width="50"></td>
                                    <td><img src="{{$slider->slider_sub_image}}" height="50" width="50"></td>
                                    <td>{{$slider->publication_status==1?'Published':'Unpublished'}}</td>
                                    <td class="center">
                                        @if($slider->publication_status==1)
                                            <a href="{{url('/unpublished-slider/'.$slider->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-slider/'.$slider->id)}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up" title="Published"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-slider/'.$slider->id)}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                        </a>
                                        <a href="{{url('/delete-slider/'.$slider->id)}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash" title="Delete" onclick="return confirm('Are You Sure Delete This');"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection