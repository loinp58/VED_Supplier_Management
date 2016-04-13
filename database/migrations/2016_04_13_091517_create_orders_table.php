<?php

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
            $table->string('code');
            $table->integer('request_order_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at_request');
            $table->timestamp('delevery_at');
            $table->timestamp('deadline');
            $table->timestamp('deadline_payment');
            $table->string('address');
            $table->integer('status_id')->unsigned();
            $table->integer('score_evaluation');
            $table->integer('delivery_method_id')->unsigned();
            $table->text('note');

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
        Schema::drop('orders');
    }
}
