<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->json('cart');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('shipping_datetime')->nullable();
            $table->string('payment_type')->nullable();
            $table->text('message')->nullable();
            $table->string('coupon')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
