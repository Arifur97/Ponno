@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Brand
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-brand') }}">Add Brand</a></li>
            <li class="active">Manage Brand</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Brand Information</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_description}}</td>
                                    <td>{{$brand->publication_status==1?'Published':'Unpublished'}}</td>
                                    <td class="center">
                                        @if($brand->publication_status==1)
                                            <a href="{{url('/unpublished-brand/'.$brand->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-brand/'.$brand->id)}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up" title="Published"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-brand/'.$brand->id)}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                        </a>
                                        <a href="{{url('/delete-category/'.$brand->id)}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash" title="Delete" onclick="return confirm('Are You Sure Delete This');"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection