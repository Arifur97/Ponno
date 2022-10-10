@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Manage Product
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/add-product') }}">Add Product</a></li>
            <li class="active">Manage Product</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title">All Product Info</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Product Price</th>
                                    <th>Stock Amount</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($allPublishedProducts as $allPublishedProduct)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $allPublishedProduct->product_name }}</td>
                                    <td>{{ $allPublishedProduct->category_name }}</td>
                                    <td>{{ $allPublishedProduct->sub_category_name }}</td>
                                    <td>TK. {{ $allPublishedProduct->product_price }}</td>
                                    <td>{{ $allPublishedProduct->product_sku }}</td>
                                    <td>{{ $allPublishedProduct->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="center">
                                       <a href="{{ url('/view-product/'.$allPublishedProduct->id) }}" class="btn btn-info btn-xs">
                                           <span class="glyphicon glyphicon-zoom-in" title="View Product"></span>
                                       </a>
                                        @if($allPublishedProduct->publication_status == 1)
                                        <a href="{{ url('/unpublished-product/'.$allPublishedProduct->id) }}" class="btn btn-success btn-xs" title="Unpublished Product">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                        @else
                                        <a href="{{ url('/published-product/'.$allPublishedProduct->id) }}" class="btn btn-warning btn-xs" title="Published Product">
                                           <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                        @endif
                                        <a href="{{ url('/edit-product/'.$allPublishedProduct->id) }}" class="btn btn-primary btn-xs" title="Edit Product">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ url('/delete-product/'.$allPublishedProduct->id) }}" class="btn btn-danger btn-xs" title="Delete Product" onclick="return confirm('Are You Sure Delete This');">
                                            <span class="glyphicon glyphicon-trash"></span>
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