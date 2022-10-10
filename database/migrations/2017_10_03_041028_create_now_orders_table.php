<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNowOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('now_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('product_name');
            $table->integer('product_quantity');
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_mobile');
            $table->text('billing_address');
            $table->string('sipping_name');
            $table->string('sipping_email');
            $table->string('sipping_mobile');
            $table->text('sipping_address');
            $table->string('payment_method');
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
        Schema::dropIfExists('now_orders');
    }
}
