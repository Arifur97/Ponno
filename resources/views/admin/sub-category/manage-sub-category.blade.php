@extends('admin.master')
@section('title')
    Manage Sub Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Sub Category
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-sub-category') }}">Add Sub Category</a></li>
            <li class="active">Manage Sub Category</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All Category Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Category Id</th>
                                <th>Sub Category Name</th>
                                <th>Sub Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{ $subCategory->category_id }}</td>
                                    <td>{{ $subCategory->sub_category_name }}</td>
                                    <td>{{ $subCategory->sub_category_description }}</td>
                                    <td>{{ $subCategory->publication_status==1?'Published':'Unpublished' }}</td>
                                    <td class="center">
                                        @if( $subCategory->publication_status == 1 )
                                            <a href="{{url('/unpublished-sub-category/'.$subCategory->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-sub-category/'.$subCategory->id)}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up" title="Published"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-sub-category/'.$subCategory->id)}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                        </a>
                                        <a href="{{url('/delete-sub-category/'.$subCategory->id)}}" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash" title="Delete" onclick="return confirm('Are You Sure Delete This');"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><

            </div>
        </div>
    </section><!-- /.content -->

@endsection