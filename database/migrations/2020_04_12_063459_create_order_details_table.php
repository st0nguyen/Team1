<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('od_order_id');
            $table->foreign('od_order_id')
                ->references('id')
                ->on('orders');
            $table->unsignedBigInteger('od_product_id');
            $table->foreign('od_product_id')
                ->references('id')
                ->on('products');
            $table->tinyInteger('or_qty');
            $table->double('od_price');
            $table->tinyInteger('od_sale')->default(0);
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
        Schema::dropIfExists('order_details');
    }
}
