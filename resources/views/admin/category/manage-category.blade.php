@extends('admin.master')
@section('title')
Manage Category
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Category
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-category') }}">Add Category</a></li>
            <li class="active">Manage Category</li>
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
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                                <td>{{$category->publication_status==1?'Published':'Unpublished'}}</td>
                                <td class="text-center">
                                    <a href="{{url('/edit-category/'.$category->id)}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                    </a>
                                </td>
                            {{--<td class="center">--}}
                                    {{--@if($category->publication_status==1)--}}
                                   {{--<a href="{{url('/unpublished-category/'.$category->id)}}" class="btn btn-primary btn-xs">--}}
                                       {{--<span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>--}}
                                   {{--</a>--}}
                                    {{--@else--}}
                                    {{--<a href="{{url('/published-category/'.$category->id)}}" class="btn btn-warning btn-xs">--}}
                                       {{--<span class="glyphicon glyphicon-arrow-up" title="Published"></span>--}}
                                    {{--</a>--}}
                                    {{--@endif--}}
                                    {{--<a href="{{url('/edit-category/'.$category->id)}}" class="btn btn-success btn-xs">--}}
                                        {{--<span class="glyphicon glyphicon-edit" title="Edit"></span>--}}
                                    {{--</a>--}}
                                    {{--<a href="{{url('/delete-category/'.$category->id)}}" class="btn btn-danger btn-xs">--}}
                                        {{--<span class="glyphicon glyphicon-trash" title="Delete" onclick="return confirm('Are You Sure Delete This');"></span>--}}
                                    {{--</a>--}}
                                {{--</td>--}}
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