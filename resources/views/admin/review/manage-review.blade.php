@extends('admin.master')
@section('title')
    Manage Review
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Review
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li><a href="{{ url('/add-category') }}">Add Category</a></li>--}}
            <li class="active">Manage Review</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All Review Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Product Review</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->id}}</td>
                                    <td>{{$review->first_name.$review->last_name}}</td>
                                    <td>{{$review->product_name}}</td>
                                    <td>{{$review->review_product}}</td>
                                    <td>{{$review->publication_status==1?'Published':'Unpublished'}}</td>
                                    <td class="center">
                                        @if($review->publication_status==1)
                                            <a href="{{url('/unpublished-review/'.$review->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-review/'.$review->id)}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up" title="Published"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/delete-review/'.$review->id)}}" class="btn btn-danger btn-xs">
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