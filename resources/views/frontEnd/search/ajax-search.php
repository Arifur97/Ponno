<section style="padding: 10px 0px;">
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 custom-hover" style="border: 1px solid deeppink; border-radius: 8px;">
                    <div class="col-sm-6 category-product-item text-left" style="">
                        <a class="cat-display" style="color: deeppink; cursor: default">
                            <?php if ($product->product_sku>=1) { echo 'Available'; }
                            else { echo 'Sold Out'; }?>
                        </a>
                    </div>
                    <div class="col-sm-6 category-product-item text-right" style="">
                        <a href="<?php echo url('/add-wishlist/'.$product->id,$product->category_id) ?>" class="cat-display" style="color: deeppink;">Add To Wishlist</a>
                    </div>

                    <a href="<?php echo url('/product-details/'.$product->id) ?>"><img src="<?php echo asset($product->product_image) ?>" alt="" style="padding: 0px; margin-top: -10px; border-radius: 5px;" class="img-responsive cate-img"></a>
                    <div class="col-sm-12" style="padding-top: 3px; height: 32px;">
                        <p class="text-center" style=""><?php echo $product->product_name ?></p>
                        <hr style="background-color: deeppink; margin-top: -8px;"/>
                    </div>
                    <div class="col-sm-6" style="padding: 0px;">
                        <a href="<?php echo url('/direct-add-to-cart/'.$product->id) ?>" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Add To Cart</a>
                    </div>
                    <div class="col-sm-6" style=" padding: 0px;">
                        <a href="<?php echo url('/product-details/'.$product->id) ?>" class="btn btn-default btn-block cat-display" style="border-radius: 0px; background-color: deeppink; color: white;">Details..</a>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK. <?php echo $product->product_price; ?></p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px; padding: 0px;">
                        <p style="padding-top: 0px; color: red;"><?php echo $product->discount_product_amount; ?> % Off</p>
                    </div>
                    <div class="col-sm-4 text-center" style="margin-top: 2px;  padding: 0px;">
                        <p style="padding-top: 0px;">TK.<?php echo $product->discount_product_price; ?></p>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</section>