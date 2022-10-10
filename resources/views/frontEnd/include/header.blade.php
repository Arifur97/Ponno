<header style="">
    <!--Top Create User panel and log-in-->
    <section id="sb-create">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6">
                    <div>
                        <ul class="nav nav-tabs">
                            <?php if($customerId = Session::get('customerId')) { ?>
                                <li><a href="{{url('customer-home')}}" style="cursor: default;"><i class="fa fa-user"></i> Hello {{ Session::get('customerName') }}</a></li>
                                <li><a href=""> | </a></li>
                                <li><a href="{{ url('/customer-logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            <?php } else {  ?>
                                <li><a href="{{ url('/sign-in') }}"><i class="fa fa-lock"></i> Sign In</a></li>
                                <li><a href=""> | </a></li>
                                <li><a href="{{ url('/registration') }}"><i class="fa fa-user"></i> Register</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-5 col-md-5 col-sm-6 col-xs-6">
                    <div>
                        <ul class="nav nav-tabs navbar-right">
                            <li><a href="">Hotline : 01712 95 13 24 </a></li>
                            <li><a href=""> | </a></li>
                            <li><a href="">Marcent Corner</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Search bar and cart panel-->
    <section id="sb-search-log">
        <div class="container" >
            <div class="row" style="padding-bottom: 0px;">
                <div class="col-md-3 col-sm-12 col-xs-12" style="padding-left: 0px;">
                    <div class="logo-img" style="margin-bottom: 0px;">
                        <a href="{{ url('/') }}"><img src="{{ asset('/front/') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <form action="{{ url('/search-product') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="sb-search" style=" position: relative; top: 8px;">
                            <div class="input-group">
                                <input type="text" name="search_content" list="searchProduct" class="form-control" aria-label="...">
                                <datalist id="searchProduct">
                                    @foreach($publishedProducts as $publishedProduct)
                                        <option value="{{ $publishedProduct->product_name }}">
                                    @endforeach
                                </datalist>
                                <div class="input-group-addon search-category">
                                    <select name="sub_category_id" onchange="selectProductsByCategoryId(this.value);" style="height: 36px; width: 180px; text-align: center; cursor: pointer; border-left: none; border-top: none; border-bottom: none; border-right: none; padding: 0px 5px; background-color: lightpink;"/>
                                        <option>Select A Category</option>
                                        @foreach($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="glyphicon glyphicon-search"></span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" style="background-color: deeppink;  float: right; position: relative; bottom: 40px; left: 1px; height: 40px; border-radius: 0px; border-color: transparent;">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="sb-cart text-right" style="padding-right: 25%; position: relative; top: 8px;">
                            <span><a href="{{ url('/show-cart') }}" title="Show Shopping Cart"><i class="fa fa-shopping-cart"></i></a> TK. ( {{ Session::get('order_total') }} )</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function selectProductsByCategoryId(subCategoryId) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/ponnobahar/public/get-product-by-category-id/'+subCategoryId;
            xmlHttp.open("GET", serverPage);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                }
            }
            xmlHttp.send(null);






//            $.ajax({
//                data: {subCategoryId:subCategoryId},
//                url: 'http://localhost/ponnobahar/public/get-product-by-category-id/'+subCategoryId,
//                method: 'GET',
//                dataType: 'json',
//                success: function (data) {
//                    $('#res').html(data)
//                }
//            });



        }
    </script>
</header>