@extends('frontEnd.master')

@section('body')

    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height: 15px;"></div>
                </div>
                <div class="col-sm-12">
                    <div class="panel panel-default" style="border: 1px solid deeppink;">
                        <div class="panel-body">
                            <h3 class="text-center" style="color: deeppink; margin-top: 0px;">My Shopping Cart</h3>
                            <hr style="background-color: deeppink;"/>
                            <table class="table table-bordered">
                                <tr style="background-color: deeppink; color: white;">
                                    <th class="text-center">Sl No</th>
                                    <th class="text-center">Product Code</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Product Image</th>
                                    <th class="text-center">Size/Width</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                <?php $i=1; $total = 0; ?>
                                @foreach($cartProducts as $cartProduct)
                                    <tr class="text-center">
                                        <td>{{ $i }}</td>
                                        <td >{{ $cartProduct->options->code }}</td>
                                        <td>{{ $cartProduct->name }}</td>
                                        <td><img src="{{ asset($cartProduct->options->image) }}" alt="" height="50" width="50"></td>
                                        <td>{{ $cartProduct->options->size_width }}</td>
                                        <td>TK. {{ $cartProduct->price }}</td>
                                        <td>
                                            <form action="{{ url('/update-cart-product/'.$cartProduct->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="input-group">
                                                    <input type="number" value="{{ $cartProduct->qty }}" onblur="updateCartProduct(this.value);" min="1" name="qty" class="form-control"/>
                                                    <span class="input-group-btn">
                                                <button type="submit" class="btn btn-success" style="background-color: deeppink;" title="Update Cart Product">
                                                    <span class="glyphicon glyphicon-upload"></span>
                                                </button>
                                            </span>
                                                </div>
                                            </form>
                                        </td>
                                        <td>TK. <?php echo $subTotal=$cartProduct->qty*$cartProduct->price ?></td>
                                        <td class="text-center">
                                            <a href="{{ url('/delete-cart-product/'.$cartProduct->rowId) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this !!!');">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; $total = $total+$subTotal; ?>
                                @endforeach
                            </table>
                            <div class="row">
                                <div class="col-sm-6" style=" margin-top: 35px;">
                                    <table>
                                        <tr>
                                            <th style="padding-top: 18px; text-align: center;">Discount Code (If Any) </th>
                                            <td><input type="text" name="discount_code" class="form-control"/></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table>
                                        <tr>
                                            <th>Sub Total</th>
                                            <td>TK. {{ $total  }}</td>
                                        </tr>
                                        <tr>
                                            <th>Discount</th>
                                            <td>TK. 0</td>
                                        </tr>
                                        <tr>
                                            <th>Grand Total</th>
                                            <td>TK. {{ $total  }}
                                                <?php
                                                Session::put('order_total', $total);
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ url('/') }}" class="btn btn-default btn-block" style="background-color: deeppink; color: white; font-size: 18px;">Continue Shopping</a>
                                </div>
                                <div class="col-sm-6">
                                    <?php if(count($cartProducts)) { ?>
                                    <?php if($customerId = Session::get('customerId')) { ?>
                                    <a href="{{ url('/shipping-info') }}" class="btn btn-default btn-block" style="background-color: deeppink; color: white; font-size: 18px;">Checkout</a>
                                    <?php } else { ?>
                                    <a href="{{ url('/checkout') }}" class="btn btn-default btn-block" style="background-color: deeppink; color: white; font-size: 18px;">Checkout</a>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <h3 class="text-center" style="color: deeppink; margin-top: 0px;">Product You may Buy</h3>
                <hr style="background-color: deeppink;"/>
            </div>
            <div class="row">
                @foreach($recentProducts as $recentProduct)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                        <div class="col-sm-6 category-product-item text-left" style="">
                            <a class="cat-display" style="color: deeppink; cursor: default">Sold Out</a>
                        </div>
                        <div class="col-sm-6 category-product-item text-right" style="">
                            <a href="" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                        </div>

                        <a href="{{ url('/product-details/'.$recentProduct->id) }}"><img src="{{ asset($recentProduct->product_image) }}" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                        <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                            <p class="text-center" style="">{{ $recentProduct->product_name }}</p>
                            <hr style="background-color: deeppink; margin-top: -8px;"/>
                        </div>
                        <div class="col-sm-6" style="padding: 0px;">
                            <a href="" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                        </div>
                        <div class="col-sm-6" style=" padding: 0px;">
                            <a href="{{ url('/product-details/'.$recentProduct->id) }}" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                            <p style="padding-top: 0px;">TK. {{ $recentProduct->product_price }}</p>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                            <p style="padding-top: 0px; color: red;">{{ $recentProduct->discount_product_amount }}% Off</p>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                            <p style="padding-top: 0px;">TK. {{ $recentProduct->discount_product_price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
//        function updateCartProduct(productQuantity) {
//            var rowId = $('#rowId').val();
//            var xmlHttp = new XMLHttpRequest();
//            var serverPage='/ponnobahar/public/update-cart-product/'+productQuantity+'/'+rowId;
//            xmlHttp.open("GET", serverPage);
//            xmlHttp.onreadystatechange = function() {
//                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
//                    alert('Cart product info will update successfully');
//                    location.reload();
//                }
//            }
//            xmlHttp.send(null);
//        }
    </script>
@endsection