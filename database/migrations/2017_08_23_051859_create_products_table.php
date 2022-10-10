<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_size_weight');
            $table->string('product_color');
            $table->string('product_sku');
            $table->float('product_price', 10,2);
            $table->integer('discount_product_amount');
            $table->float('discount_product_price' ,10,2);
            $table->tinyInteger('top_left_one');
            $table->tinyInteger('top_left_two');
            $table->tinyInteger('top_right_one');
            $table->tinyInteger('top_right_two');
            $table->tinyInteger('main_slider');
            $table->tinyInteger('carousel_slider');
            $table->tinyInteger('top_product_status');

            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->text('product_image');
            $table->tinyInteger('publication_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
