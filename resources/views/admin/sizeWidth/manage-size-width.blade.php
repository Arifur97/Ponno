@extends('admin.master')
@section('title')
    Manage Size Width
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Size Width
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-size-width') }}">Add Size Width</a></li>
            <li class="active">Manage Size Width</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header  text-center">
                        <h3 class="box-title">All Size Width Info Goes Here</h3>
                    </div>
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Size Width Name</th>
                                <th>Size Width Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sizeWidths as $sizeWidth)
                                <tr>
                                    <td>{{$sizeWidth->size_width_name}}</td>
                                    <td>{{$sizeWidth->size_width_description}}</td>
                                    <td>{{$sizeWidth->publication_status==1?'Published':'Unpublished'}}</td>
                                    <td class="center">
                                        @if($sizeWidth->publication_status==1)
                                            <a href="{{url('/unpublished-size-width/'.$sizeWidth->id)}}" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down" title="Unpublished"></span>
                                            </a>
                                            @else
                                            <a href="{{url('/published-size-width/'.$sizeWidth->id)}}" class="btn btn-warning btn-xs">
                                             <span class="glyphicon glyphicon-arrow-up" title="Published"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-size-width/'.$sizeWidth->id)}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit" title="Edit"></span>
                                        </a>
                                        <a href="{{url('/delete-size-width/'.$sizeWidth->id)}}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure Delete This');">
                                            <span class="glyphicon glyphicon-trash"></span>
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