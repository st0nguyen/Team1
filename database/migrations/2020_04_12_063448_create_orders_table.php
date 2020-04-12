<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_user_id');
            $table->foreign('order_user_id')
                ->references('id')
                ->on('users');
            $table->string('order_cus_name');
            $table->double('order_total_price')->default(0);
            $table->string('order_address');
            $table->string('order_city');
            $table->string('order_phone');
            $table->string('order_note')->nullable();
            $table->tinyInteger('order_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
