@extends('admin.master')
@section('title')
    View Product
@endsection
@section('body')
    <section class="content-header">
        <h1>
            Create Product Form
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('/manage-product') }}">Manage Product</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    <!-- Horizontal Form -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title"> Product Info</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Product ID</th>
                                <td>{{ $productById->id }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $productById->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{ $productById->product_code }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $productById->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Sub Category Name</th>
                                <td>{{ $productById->sub_category_name }}</td>
                            </tr>
                            <tr>
                                <th>Brand Name</th>
                                <td>{{ $productById->brand_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Size</th>
                                <td>
                                    @foreach($productSizeWidths as $productSizeWidth)
                                    {{ $productSizeWidth->size_width_name }} ,
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Color</th>
                                <td>{{ $productById->product_color }}</td>
                            </tr>
                            <tr>
                                <th>Product Skew</th>
                                <td>{{ $productById->product_sku }}</td>
                            </tr>
                            <tr>
                                <th>Top Left One Status</th>
                                <td>{{ $productById->top_left_one == 1 ? 'Select' : 'Not Selected' }}</td>
                            </tr>
                            <tr>
                                <th>Top Left Two Status</th>
                                <td>{{ $productById->top_left_two == 1 ? 'Select' : 'Not Selected' }}</td>
                            </tr>
                            <tr>
                                <th>Top Right One Status</th>
                                <td>{{ $productById->top_right_one == 1 ? 'Select' : 'Not Selected' }}</td>
                            </tr>
                            <tr>
                                <th>Top Right Two Status</th>
                                <td>{{ $productById->top_right_two == 1 ? 'Select' : 'Not Selected' }}</td>
                            </tr>
                            <tr>
                                <th>Carousel Slider Status</th>
                                <td>{{ $productById->carousel_slider == 1 ? 'Select' : 'Not Selected' }}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{ $productById->product_short_description }}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td><?php echo $productById->product_long_description ?></td>
                            </tr>
                            <tr>
                                <th>Product Main Image</th>
                                <td>
                                    <img src="{{ asset($productById->product_image) }}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <th>Product Sub Image</th>
                                <td>
                                    @foreach($productSubImagesById as $productSubImageById)
                                    <img src="{{ asset($productSubImageById->product_sub_image) }}" alt="" height="80" width="80"> ||
                                        @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Publication Status</th>
                                <td>{{ $productById->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection